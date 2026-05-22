@extends('layouts.app')

@section('title', 'Contact - MegaShop')

@section('content')
<main>
    <h1 class="page-title">Nous Contacter</h1>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px;">

        <!-- FORM -->
        <div class="form-container" style="margin: 0;">
            <h2>Formulaire de Contact</h2>

            <form method="POST" action="#">
                @csrf

                <div class="form-group">
                    <label>Nom Complet *</label>
                    <input type="text" name="nom" required>
                </div>

                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="email" required>
                </div>

                <div class="form-group">
                    <label>Téléphone</label>
                    <input type="tel" name="telephone">
                </div>

                <div class="form-group">
                    <label>Sujet *</label>
                    <select name="sujet" required>
                        <option value="">-- Choisir --</option>
                        <option value="commande">Commande</option>
                        <option value="retour">Retour</option>
                        <option value="produit">Produit</option>
                        <option value="technique">Technique</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Message *</label>
                    <textarea name="message" required></textarea>
                </div>

                <button type="submit" class="btn btn-secondary" style="width:100%;">
                    Envoyer
                </button>
            </form>
        </div>

        <!-- INFO -->
        <div>

            <div style="background:white;padding:30px;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.1);margin-bottom:25px;">
                <h3>📞 Contact</h3>

                <p>
                    <strong>Adresse :</strong><br>
                    {{ $config['company']['address'] }} <br>
                    {{ $config['company']['zip'] }} {{ $config['company']['city'] }} <br>
                    {{ $config['company']['country'] }}
                </p>

                <p>
                    <strong>Téléphone :</strong><br>
                    {{ $config['company']['phone'] }}
                </p>

                <p>
                    <strong>Email :</strong><br>
                    {{ $config['company']['email'] }}<br>
                    {{ $config['company']['support_email'] }}
                </p>

                <p>
                    <strong>Horaires :</strong><br>
                    Lundi-Vendredi: {{ $config['hours']['monday_friday'] }}<br>
                    Samedi: {{ $config['hours']['saturday'] }}<br>
                    Dimanche: {{ $config['hours']['sunday'] }}
                </p>
            </div>

        </div>
    </div>

    <!-- FAQ -->
    <section style="background:white;padding:30px;border-radius:8px;">
        <h2>❓ FAQ</h2>

        @foreach($faq as $item)
            <div style="margin-bottom:20px;">
                <h4>{{ $item['question'] }}</h4>
                <p style="color:#555;">
                    {{ $item['answer'] }}
                </p>
            </div>
        @endforeach

    </section>

</main>
@endsection