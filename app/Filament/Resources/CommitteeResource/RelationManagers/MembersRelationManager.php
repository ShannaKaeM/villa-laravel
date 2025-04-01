<?php

namespace App\Filament\Resources\CommitteeResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MembersRelationManager extends RelationManager
{
    protected static string $relationship = 'members';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('role')
                    ->options([
                        'chair' => 'Chair',
                        'vice_chair' => 'Vice Chair',
                        'secretary' => 'Secretary',
                        'member' => 'Member',
                        'board_liaison' => 'Board Liaison',
                    ])
                    ->required(),
                Forms\Components\Textarea::make('expertise')
                    ->maxLength(65535),
                Forms\Components\DatePicker::make('term_start')
                    ->label('Term Start Date'),
                Forms\Components\DatePicker::make('term_end')
                    ->label('Term End Date')
                    ->after('term_start'),
                Forms\Components\Toggle::make('is_active')
                    ->label('Active Member')
                    ->default(true),
                Forms\Components\Select::make('team')
                    ->options([
                        'core' => 'Core Team',
                        'advisory' => 'Advisory Team',
                        'project' => 'Project Team',
                        'support' => 'Support Team',
                    ])
                    ->label('Team Assignment')
                    ->helperText('Assign member to a specific team within the committee'),
                Forms\Components\Textarea::make('team_responsibilities')
                    ->label('Team Responsibilities')
                    ->helperText('Specific responsibilities within the team')
                    ->maxLength(65535),
                Forms\Components\TagsInput::make('team_projects')
                    ->label('Team Projects')
                    ->helperText('Active projects this member is working on'),
                Forms\Components\Select::make('team_priority')
                    ->options([
                        0 => 'Standard',
                        1 => 'High',
                        2 => 'Critical',
                    ])
                    ->label('Team Priority')
                    ->helperText('Priority level for team assignments')
                    ->default(0),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('full_name')
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable(['first_name', 'last_name'])
                    ->sortable(),
                Tables\Columns\TextColumn::make('role'),
                Tables\Columns\TextColumn::make('team')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'core' => 'success',
                        'advisory' => 'warning',
                        'project' => 'info',
                        'support' => 'gray',
                        default => 'gray',
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('team_projects')
                    ->badge()
                    ->separator(','),
                Tables\Columns\TextColumn::make('team_priority')
                    ->badge()
                    ->color(fn (string $state): string => match ((int)$state) {
                        2 => 'danger',
                        1 => 'warning',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ((int)$state) {
                        2 => 'Critical',
                        1 => 'High',
                        default => 'Standard',
                    })
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'chair' => 'success',
                        'vice_chair' => 'warning',
                        'secretary' => 'info',
                        'board_liaison' => 'danger',
                        default => 'secondary',
                    }),
                Tables\Columns\TextColumn::make('expertise'),
                Tables\Columns\TextColumn::make('term_start')
                    ->date(),
                Tables\Columns\TextColumn::make('term_end')
                    ->date(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
}
