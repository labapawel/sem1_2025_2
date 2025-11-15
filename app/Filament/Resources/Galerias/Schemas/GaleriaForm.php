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
                TextInput::make('title'),
                FileUpload::make('images')
                    ->multiple()
                    ->directory('Galeria')
                    ->image()
                    ->maxFiles(20)
                    ->reorderable()
                    ->imageEditor()
                    ->maxSize(5120)
                    ->visibility('public')
            ]);
    }
}
