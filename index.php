<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Web Personal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div>
            <h1>Hola, soy Edwin Sigcha</h1>
            <p>Desarrollador fullstack, autodidacta y autocr&iacute;tico, lector ocasional y amante de la naturaleza</p>
        </div>
    </header>

    <main class="contenedor">
        <section id="sobre-mi">
            <h2>Sobre m&iacute;</h2>
            <article>
                <p>Bienvenido a mi web personal. Soy un desarrollador fullstack con m&aacute;s de 10 a&ntilde;os de experiencia,
                    vivo en Cuenca, Ecuador. Actualmente laboro como freelancer en diversos proyectos.</p>
            </article>
        </section>

        <section id="estudios">
            <h2>Estudios y conocimiento</h2>
            <div>
                <article>
                    <h3>Estudios</h3>
                    <p>Estudiante de la carrera de software en la UNIANES</p>
                </article>
                <article>
                    <h3>Conocimientos T&eacute;cnicos</h3>
                    <ul>
                        <li>HTML, CSS, Javascript</li>
                        <li>Java, PHP, Python, Node</li>
                        <li>Oracle, Postgres, Mysql</li>
                        <li>Apache, Nginx</li>
                        <li>Linux, Docker, Kubernates</li>
                        <li>AWS, GCP, Azure</li>
                    </ul>
                </article>
            </div>
        </section>

        <section id="intereses">
            <h2>Intereses</h2>
            <article>
                <ul>
                    <li>UI/UX</li>
                    <li>Marketing digital</li>
                    <li>IA</li>
                </ul>
            </article>
        </section>

        <section id="contacto">
            <h2>Contacto</h2>
            <div>
                <p>Tel&eacute;fono: <a href="tel:0980327483">0980327483</a></p>
                <p>Correo electrónico: <a href="mailto:esigcha@hotmail.com">esigcha@hotmail.com</a></p>
            </div>
        </section>

        <?php
        $resultado = 0;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = isset($_POST['numero1']) ? floatval($_POST['numero1']) : 0;
            $numero2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : 0;
            $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : 'suma';

            switch ($operacion) {
                case 'suma':
                    $resultado = $numero1 + $numero2;
                    break;
                case 'resta':
                    $resultado = $numero1 - $numero2;
                    break;
                case 'multiplicacion':
                    $resultado = $numero1 * $numero2;
                    break;
                case 'division':
                    if ($numero2 != 0) {
                        $resultado = $numero1 / $numero2;
                    } else {
                        $resultado = "División para cero no permitida";
                    }
                    break;
            }
        }
        ?>

        <section id="calculadora">
            <h2>Calculadora Básica</h2>
            <form method="POST" action="">
                <input type="number" name="numero1" placeholder="Primer número" required value="<?php echo isset($_POST['numero1']) ? htmlspecialchars($_POST['numero1']) : ''; ?>">

                <select name="operacion">
                    <option value="suma" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'suma') ? 'selected' : ''; ?>>+</option>
                    <option value="resta" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'resta') ? 'selected' : ''; ?> >-</option>
                    <option value="multiplicacion" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'multiplicacion') ? 'selected' : ''; ?> >×</option>
                    <option value="division" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] == 'division') ? 'selected' : ''; ?>>÷</option>
                </select>
                </select>

                <input type="number" name="numero2" placeholder="Segundo número" required value="<?php echo isset($_POST['numero2']) ? htmlspecialchars($_POST['numero2']) : ''; ?>">

                <button type="submit">Calcular</button>
            </form>
            <div id="resultado">
                <p>Resultado: <span><?php echo $resultado; ?></span></p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
