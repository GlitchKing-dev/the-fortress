<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Registro de ingresos monetarios de la empresa de productos de construcción la Fortaleza C.A." >
    <meta name="keywords" content="La Fortaleza C.A., The Fortress, Registro de ingresos, Control de ingresos">
    <meta name="author" content="Miguel Bethancourt, Sugeidy Manzanilla, Saúl Ramírez, Frank Delgadillo">
    
    <!-- Open graph -->
    <meta property="og:title" content="Ingresos de La Fortaleza C.A.">
    <meta property="og:image" content="/assets/img/image-preview.png">
    <meta property="og:image:alt" content="Logotipo de La Fortaleza C.A.">
    <meta property="og:description" content="Registro de egresos de la empresa la Fortaleza C.A.">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="La Fortaleza C.A.">
    <meta property="og:locale" content="es_ES">
    <meta property="og:url" content="https://la-fortaleza-ca.free.nf/pages/ingresos.php">
    
    <!-- Estilos -->
    <link rel="stylesheet" href="/assets/css/ingresos-styles.css">
    <link rel=stylesheet href="/assets/css/fonts.css">
    <link rel=icon href="/assets/img/favicon.png">

    <title>Ingresos</title>
    
</head>
<body>
    <header>
        <h1>La Fortaleza C.A.</h1>
        <p class="rif">RIF: J-090345234</p>
        <nav>
            <a class="nav__link" href="/index.php">. Inicio .</a>
            <a class="nav__link" href="egresos.php">. Registrar Egreso .</a>
            <a class="nav__link" href="reporte.php">. Reporte .</a>
        </nav>
    </header>

    <main>
        <form class="form" action="../php/procesar_ingreso.php" method="POST">
            <h2 class= "form__title">Registro de Ingresos</h2>
            
            <label class="form__label" for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" required>

            <label class="form__label" for="monto_bs">Monto en Bs</label>
            <input class="form__input" type="number" id="monto_bs" name="monto_bs" step="0.01" placeholder="Ej: 100" required>

            <label class="form__label" for="tasa_bcv">Tasa BCV</label>
            <input class="form__input" type="number" id="tasa_bcv" name="tasa_bcv" step="0.01" placeholder="Ej: 37" required>

            <label class="form__label" for="monto_usd">Monto en $</label>
            <input class="form__input" type="number" id="monto_usd" name="monto_usd" step="0.01" placeholder="Ej: 40" required>

            <label class="form__label" for="tipo_ingreso">Tipo de Ingreso</label>
            <input class="form__input" type="text" id="tipo_ingreso" name="tipo_ingreso" placeholder="Ej: Pago Móvil Banesco" required>

            <button class="form__buttom" type="submit">Registrar</button>
        </form>
        
        <?php if (isset($_GET['success'])): ?>
            <p class="message">Ingreso registrado exitosamente.</p>
        <?php endif; ?>
    </main>

    <footer>
        <p>&copy; 2024 La Fortaleza C.A. Todos los derechos reservados.</p>
    </footer>

</body>
</html>