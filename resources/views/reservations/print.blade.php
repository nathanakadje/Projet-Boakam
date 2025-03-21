<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation #{{ $reservation->id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .header h1 {
            color: #333;
            margin-bottom: 5px;
        }
        .info-section {
            margin-bottom: 20px;
        }
        .info-section h2 {
            color: #444;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .info-item {
            margin-bottom: 10px;
        }
        .info-item strong {
            display: block;
            margin-bottom: 3px;
            color: #555;
        }
        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 0.8em;
            color: #777;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .details {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
        }
        .price {
            font-size: 1.2em;
            text-align: right;
            color: #000;
            font-weight: bold;
            margin-top: 20px;
        }
        
        @media print {
            body {
                padding: 0;
                font-size: 12pt;
            }
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Confirmation de Réservation</h1>
        <p>Réservation #{{ $reservation->id }} - Créée le {{ $reservation->created_at->format('d/m/Y') }}</p>
    </div>
    
    <div class="info-section">
        <h2>Informations Client</h2>
        <div class="info-grid">
            <div class="info-item">
                <strong>Nom</strong>
                {{ $reservation->name }}
            </div>
            <div class="info-item">
                <strong>Email</strong>
                {{ $reservation->email }}
            </div>
            <div class="info-item">
                <strong>Téléphone</strong>
                {{ $reservation->phone }}
            </div>
        </div>
    </div>
    
    <div class="info-section">
        <h2>Détails de la Réservation</h2>
        <div class="details">
            <div class="info-grid">
                <div class="info-item">
                    <strong>Date d'arrivée</strong>
                    {{ $reservation->check_in->format('d/m/Y') }}
                </div>
                <div class="info-item">
                    <strong>Date de départ</strong>
                    {{ $reservation->check_out->format('d/m/Y') }}
                </div>
                <div class="info-item">
                    <strong>Durée du séjour</strong>
                    {{ $reservation->duration }} jour(s)
                </div>
            </div>
            <div class="price">
                Montant total: {{ number_format($reservation->montant, 2, ',', ' ') }} €
            </div>
        </div>
    </div>
    
    <div class="info-section">
        <h2>Informations Complémentaires</h2>
        <p>Ce document sert de preuve d'enregistrement sur notre plateforme, Toutes informations personnelles est strictement confidentielle.</p>
        <p>Pour toute question ou besoin d'assistance, n'hésitez pas à nous contacter au numéro indiqué ci-dessous.</p>
    </div>
    
    <div class="footer">
        <p>Hôtel Cana Plage - Jacqueville-Côte D'Ivoire - +225 0179741238 && +225 0140262267 - christakadje20@gmail.com</p>
        <p>Merci d'avoir choisi notre établissement!</p>
    </div>
    
    <div class="no-print" style="text-align: center; margin-top: 20px;">
        <button onclick="window.print();" style="padding: 10px 20px; background: #4a6de5; color: white; border: none; border-radius: 5px; cursor: pointer;">Imprimer</button>
        <button onclick="window.close();" style="padding: 10px 20px; background: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer; margin-left: 10px;">Fermer</button>
    </div>
</body>
</html>