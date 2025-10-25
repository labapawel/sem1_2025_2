<?php

namespace App\Filament\Resources\Pages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;

class PagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                 TextColumn::make('tytul')
                    ->label(__('admin.title.title'))
                    ->searchable(),    
                TextColumn::make('url')
                    ->label('URL')
                    ->searchable(),
                TextColumn::make('jezyk')
                    ->label('Język')
                    ->searchable(),
                BooleanColumn::make('opublikowana')
                    ->label('Opublikowana'),
                BooleanColumn::make('aktywny')
                    ->label('Aktywny'),
                TextColumn::make('uzytkownik')
                    ->label('Użytkownik')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->label(__('admin.title.createAt'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label(__('admin.title.updateAt'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
