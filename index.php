<?php 
    $faq = [
        [
            'question' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione <br> europea (CGUE) relativa al diritto all\'oblio?',
            'answer' => [
                'La recente decisione della <a href="#">Corte di giustizia dell\'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni <br> utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter <br> essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.',
                'Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura <br> complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il <br> diritto di tutti di conoscere e distribuire le informazioni.',
                'Per presentare una richiesta di rimozione, compila questo <a href="#">modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione, puoi rivolgerti all\'Autorità garante per la protezione dei dati personali nel tuo paese.',
                'Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione <br> della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia <br> importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.',
                'Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per <br> la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state <br> soggette a una rimozione. '
            ],
        ],
        [
            'question' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
            'answer' => [
                'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue <br> informazioni sono al sicuro e accessibili quando ne hai bisogno.',
                'Siamo costantemente al lavoro per garantire un\'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. <br> Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le <br> tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due <br> passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.',
                'Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href="#">Centro Google per la sicurezza online</a>.',
                '<a href="#">Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.',
            ]
        ],
        [
            'question' => 'Perché il mio account è associato a un paese?',
            'answer' => [
                'Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:',
                [
                    'La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:',
                    [
                        'Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell\'Unione europea, oltre a Islanda, Liechtenstein <br> e Norvegia) o in Svizzera.',
                        'Google LLC, con sede negli Stati Uniti, per il resto del mondo.',
                    ],
                    'La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.',
                ],
                'Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo <br> account.',
            ]
        ],
        [
            'question' => '',
            'answer' => [
                '',
            ]
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Header -->
    <header>
        <div class="top">
            <div class="left">
                <span><img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="google logo"></span>
                <span>Privacy e termini</span>
            </div>

            <div class="left">
                <span class="apps">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                </span>
                <span class="account">A</span>
            </div>
        </div>

        <div class="bottom"></div>
    </header>


    <?php foreach ($faq as $single_faq) { ?>
        <!-- Question  -->
        <h2><?php echo $single_faq['question'] ?></h2>

        <!-- Answer  -->
        <div class="answer">

            <!-- Per ogni risposta -->
            <?php foreach ($single_faq['answer'] as $single_answer) { ?>
                <!-- Se la risposta non contiene liste -->
                <?php if (!is_array($single_answer)) { ?>
                    <p class="answer"><?php echo $single_answer; ?></p>
                <!-- Altrimenti stampa una ol con le sotto-risposte -->
                <?php } else { ?>
                    <ol class="answer single-answers">
                        <!-- Per ogni sotto-risposta  -->
                        <?php foreach ($single_answer as $sub_answer) { ?>
                            <!-- Se la sotto-risposta non contiene liste --> 
                            <?php if (!is_array($sub_answer)) { ?>
                                <li><?php echo $sub_answer; ?></li>
                            <?php } else { ?>
                                <ul class="answer sub-answers">
                                    <!-- Per ogni sotto-risposta  -->
                                    <?php foreach ($sub_answer as $single_sub_answer) { ?>
                                        <li><?php echo $single_sub_answer; ?></li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        <?php } ?>
                    </ol>
                <?php } ?>
            <?php }  ?>
        </div>

    <?php } ?>    
</body>
</html>