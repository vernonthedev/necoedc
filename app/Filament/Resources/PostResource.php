<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Closure;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Content';

    //added search functionality
    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            //setup the two grid layout
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(2048)
                            //auto generate the slug from the title
                            ->reactive()
                            ->afterStateUpdated(function ($record, $state, $set) {
                                $set('slug', Str::slug($state));
                            }),
                            Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(2048),

                        ]),
                        Forms\Components\RichEditor::make('body')
                            ->required(),
                         
                        Forms\Components\Toggle::make('active')
                             ->required(),
                         Forms\Components\DateTimePicker::make('published_at')
                            ->required(),

                    ])->columnSpan(8),
                Forms\Components\Card::make()
                    ->schema([
                         Forms\Components\FileUpload::make('thumbnail'),
                         Forms\Components\TextInput::make('meta_title'),
                         Forms\Components\TextInput::make('meta_description'),
                    ])->columnSpan(4),
            ])->columns(12);

    }
    //the table layout and functionalities as well as actions.
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    // Register my widgets
    public static function getWidgets(): array
{
    return [
        PostResource\Widgets\PostWidget::class,
    ];

    
}

}
