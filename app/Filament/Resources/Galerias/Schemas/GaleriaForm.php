<?php

namespace App\Filament\Resources\Galerias\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class GaleriaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label(__("admin.title.name"))
                    ->columnSpan('full'),
                FileUpload::make('images')
                    ->label(__("admin.title.images"))
                    ->multiple()
                    ->directory('galeria')
                    ->disk('public')
                    ->panelLayout('grid')
                    ->columns(4)
                    ->image()
                    ->maxFiles(20)
                    ->reorderable()
                    ->columnSpanFull()
                    ->imageEditor()
                    ->maxSize(5120)
                    ->visibility('public')
            ]);
    }
}
