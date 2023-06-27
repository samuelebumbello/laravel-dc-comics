<div align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a>
<h1><strong style="color: #EF3B2D;">9 + BOOTSTRAP TEMPLATE</strong></h1></div>

# Gestione archivio fumetti

**Steps**

1. Creo il layout
2. Creo il db da phpmyadmin
3. Collego il database al progetto (in .env)
4. Lancio comando per il controller **php artisan make:controller PageController**
5. Aggiorno le routes
6. Collego le pagine in modo da renderle navigabili
7. Creo model,migration,controller con un comando **php artisan make:model Comic -m -r**
8. Nella cartella config importo array con i dati che mi serviranno per popolare la tabella
9. Inserisco le colonne della mia tabella in migrations
10. Lancio il seeder
11. Con un ciclo stampo i dati in pagina
12. Creo una seconda pagina di atterraggio per la "show"
13. Creo file show per poter visualizzare i dettagli del prodotto
14. Aggiungo una nuova route per l'inserimento di un nuovo prodotto
15. Inserisco nel nuovo file un form 
16. Creo una nuova view per visualizzare i dati inviati dal form
17. Tramite il metodo fillable salvo i dati del form 
18. Aggiungo nell'elenco il nuovo prodotto
