<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('tytul')
                    ->label(__('admin.title.title'))
                    ->required(),
                TextInput::make('url')
                    ->label(__('admin.title.slug'))
                    ->required(),
                Toggle::make('opublikowana')
                    ->label(__('admin.title.published')),
                Toggle::make('aktywny')
                    ->label(__('admin.title.active')),
                Select::make('jezyk')
                    ->label(__('admin.title.language'))
                    ->required()
                    ->options([
                        'pl' => 'Polski',
                        'en' => 'English',
                        'de' => 'Deutsch',
                        'hu' => 'Magyar',
                    ]),
                TextInput::make('uzytkownik')
                    ->label(__('admin.title.user'))
                    ->readonly(),
                RichEditor::make('zawartosc')
                    ->label(__('admin.title.content'))
                    ->columnSpan('full')
                    ->extraAttributes(['style' => 'min-height: 80vh;'])
                    ->required(),   
            ]);
    }
}
