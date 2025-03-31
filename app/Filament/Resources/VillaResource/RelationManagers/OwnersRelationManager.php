<?php

namespace App\Filament\Resources\VillaResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class OwnersRelationManager extends RelationManager
{
    protected static string $relationship = 'owners';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Ownership Details')
                    ->schema([
                        Forms\Components\Toggle::make('is_primary_owner')
                            ->required(),
                        Forms\Components\TextInput::make('ownership_percentage')
                            ->numeric()
                            ->default(100)
                            ->minValue(0)
                            ->maxValue(100)
                            ->suffix('%')
                            ->required(),
                        Forms\Components\DatePicker::make('ownership_start_date')
                            ->required(),
                        Forms\Components\DatePicker::make('ownership_end_date'),
                    ])->columns(2),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('full_name')
            ->columns([
                Tables\Columns\TextColumn::make('full_name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\IconColumn::make('is_primary_owner')
                    ->boolean(),
                Tables\Columns\TextColumn::make('ownership_percentage')
                    ->suffix('%')
                    ->numeric(),
                Tables\Columns\TextColumn::make('ownership_start_date')
                    ->date(),
                Tables\Columns\TextColumn::make('ownership_end_date')
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->form(fn (Tables\Actions\AttachAction $action): array => [
                        $action->getRecordSelect(),
                        Forms\Components\Toggle::make('is_primary_owner')
                            ->required(),
                        Forms\Components\TextInput::make('ownership_percentage')
                            ->numeric()
                            ->default(100)
                            ->minValue(0)
                            ->maxValue(100)
                            ->suffix('%')
                            ->required(),
                        Forms\Components\DatePicker::make('ownership_start_date')
                            ->required(),
                        Forms\Components\DatePicker::make('ownership_end_date'),
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DetachAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make(),
                ]),
            ]);
    }
}
