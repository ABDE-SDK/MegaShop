@extends('layouts.app')
@section('title', 'Conditions Générales de Vente - MegaShop')
@section('content')

    <main>
        <h1 class="page-title">Conditions Générales de Vente (CGV)</h1>

        <div class="cgv-content">
            @foreach ($cgv as $section)
                <div class="cgv-section">
                    <h2>{{ $section['id'] }}. {{ $section['title'] }}</h2>

                    @foreach ($section['section'] as $index => $block)
                        @if ($block['subtitle'])
                            <h3>{{ $section['id'] }}.{{ $index+1 }}.{{ $block['subtitle'] }}</h3>
                        @endif

                        @if (is_array($block['content']))
                            <ul>
                                @foreach ($block['content'] as $li)
                                    <li>{{ $li }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>{{ $block['content'] }}</p>
                        @endif
                    @endforeach
                </div>
            @endforeach
            <div
                style="background: #d4edda; padding: 20px; border-radius: 8px; margin-top: 30px; border-left: 4px solid #28a745;">
                <p><strong>Date de mise à jour :</strong> 22 février 2026</p>
                <p>Ces Conditions Générales de Vente sont valables à compter de la date mentionnée et jusqu'à modification
                    ultérieure.</p>
            </div>
        </div>
    </main>
@endsection
