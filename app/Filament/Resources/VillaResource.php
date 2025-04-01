<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VillaResource\Pages;
use App\Filament\Resources\VillaResource\RelationManagers;
use App\Models\Villa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VillaResource extends Resource
{
    protected static ?string $model = Villa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Villa Details')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Basic Information')
                            ->schema([
                                Forms\Components\TextInput::make('unit_number')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->placeholder('e.g., A101'),
                                Forms\Components\TextInput::make('display_name')
                                    ->required()
                                    ->placeholder('e.g., Oceanfront Villa A101'),
                                Forms\Components\RichEditor::make('description')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('featured_image')
                                    ->image()
                                    ->directory('villas/featured')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('gallery_images')
                                    ->multiple()
                                    ->image()
                                    ->directory('villas/gallery')
                                    ->maxFiles(10)
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('floorplan_image')
                                    ->image()
                                    ->directory('villas/floorplans')
                                    ->columnSpanFull(),
                            ])->columns(2),
                            
                        Forms\Components\Tabs\Tab::make('Details')
                            ->schema([
                                Forms\Components\Select::make('bedrooms')
                                    ->required()
                                    ->options([
                                        1 => '1 Bedroom',
                                        2 => '2 Bedrooms',
                                        3 => '3 Bedrooms',
                                    ])
                                    ->reactive(),

                                Forms\Components\Select::make('floorplan_type')
                                    ->required()
                                    ->options(function (callable $get) {
                                        $bedrooms = $get('bedrooms');
                                        $options = [
                                            1 => [
                                                '1.1' => 'Floorplan 1.1',
                                                '1.2' => 'Floorplan 1.2',
                                            ],
                                            2 => [
                                                '2.1' => 'Floorplan 2.1',
                                                '2.2' => 'Floorplan 2.2',
                                                '2.3' => 'Floorplan 2.3',
                                            ],
                                            3 => [
                                                '3.1' => 'Floorplan 3.1',
                                                '3.2' => 'Floorplan 3.2',
                                            ],
                                        ];
                                        return $bedrooms ? ($options[$bedrooms] ?? []) : [];
                                    })
                                    ->visible(fn (callable $get) => filled($get('bedrooms'))),

                                Forms\Components\Select::make('bathrooms')
                                    ->required()
                                    ->options([
                                        1 => '1 Bathroom',
                                        2 => '2 Bathrooms',
                                        3 => '3 Bathrooms',
                                    ]),

                                Forms\Components\Select::make('floor_level')
                                    ->required()
                                    ->options([
                                        1 => '1st Floor',
                                        2 => '2nd Floor',
                                        3 => '3rd Floor',
                                        4 => '4th Floor',
                                    ]),

                                Forms\Components\Select::make('stories')
                                    ->required()
                                    ->options([
                                        1 => '1 Story',
                                        2 => '2 Stories',
                                    ])
                                    ->default(1),

                                Forms\Components\TextInput::make('square_feet')
                                    ->numeric()
                                    ->minValue(0),
                            ])->columns(2),
                            
                        Forms\Components\Tabs\Tab::make('Status')
                            ->schema([
                                Forms\Components\Toggle::make('is_featured')
                                    ->label('Featured Property')
                                    ->helperText('Show this villa on the homepage'),
                                Forms\Components\Toggle::make('is_for_rent')
                                    ->label('Available for Rent'),
                                Forms\Components\Toggle::make('is_for_sale')
                                    ->label('Available for Sale'),
                                Forms\Components\TextInput::make('rental_rate')
                                    ->label('Daily Rental Rate')
                                    ->prefix('$')
                                    ->numeric()
                                    ->minValue(0)
                                    ->visible(fn ($get) => $get('is_for_rent')),
                                Forms\Components\TextInput::make('sale_price')
                                    ->label('Sale Price')
                                    ->prefix('$')
                                    ->numeric()
                                    ->minValue(0)
                                    ->visible(fn ($get) => $get('is_for_sale')),
                            ])->columns(2),
                    ])
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('featured_image')
                    ->circular()
                    ->defaultImageUrl(url('/images/Featured Image/Shanna_Middleton_A_balcony_with_a_view_of_the_beach_and_ocean_durin_41c2b2c8-4abf-4dab-b206-fa36e0dce679.png')),
                Tables\Columns\TextColumn::make('unit_number')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('display_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('floorplan_type')
                    ->badge(),
                Tables\Columns\TextColumn::make('view_type')
                    ->badge(),
                Tables\Columns\TextColumn::make('bedrooms')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bathrooms')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_for_rent')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_for_sale')
                    ->boolean(),
                Tables\Columns\TextColumn::make('rental_rate')
                    ->money('USD')
                    ->sortable()
                    ->visible(fn ($record) => $record?->is_for_rent),
                Tables\Columns\TextColumn::make('sale_price')
                    ->money('USD')
                    ->sortable()
                    ->visible(fn ($record) => $record?->is_for_sale),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('floorplan_type')
                    ->options([
                        'studio' => 'Studio',
                        '1br' => '1 Bedroom',
                        '2br' => '2 Bedroom',
                        '3br' => '3 Bedroom',
                        'penthouse' => 'Penthouse',
                    ]),
                Tables\Filters\SelectFilter::make('view_type')
                    ->options([
                        'ocean' => 'Ocean View',
                        'pool' => 'Pool View',
                        'garden' => 'Garden View',
                        'city' => 'City View',
                    ]),
                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Featured'),
                Tables\Filters\TernaryFilter::make('is_for_rent')
                    ->label('For Rent'),
                Tables\Filters\TernaryFilter::make('is_for_sale')
                    ->label('For Sale'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\OwnersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVillas::route('/'),
            'create' => Pages\CreateVilla::route('/create'),
            'edit' => Pages\EditVilla::route('/{record}/edit'),
        ];
    }
}
