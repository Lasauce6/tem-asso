<?php

namespace App\Filament\Admin\Resources\Posts\Pages;

use Filament\Actions\EditAction;
use App\Filament\Admin\Resources\Posts\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPost extends ViewRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
