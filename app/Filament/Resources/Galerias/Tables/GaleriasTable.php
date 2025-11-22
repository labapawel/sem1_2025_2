<?php

namespace App\Filament\Resources\Galerias\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class GaleriasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("title")
                    ->label(__("admin.title.name")),
                TextColumn::make("user.name")
                    ->label(__("admin.title.username")),
                TextColumn::make("created_at")->dateTime()
                    ->label(__("admin.title.created_at")),
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
