<?php

namespace App\Filament\Widgets;

use App\Models\Artikel;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class ArtikelChart extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Artikel';

    protected function getData(): array
    {
        $data = Artikel::selectRaw('MONTH(publish_date) as month, COUNT(*) as total')
            ->whereYear('publish_date', now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->keyBy('month');

        $months = collect(range(1, 12))->map(function ($month) use ($data) {
            return $data->get($month)?->total ?? 0;
        });

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Artikel',
                    'data' => $months->toArray(),
                ],
            ],
            'labels' => collect(range(1, 12))->map(fn($m) => Carbon::create()->month($m)->format('M'))->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
