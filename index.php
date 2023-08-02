<!DOCTYPE html>
<html>

<head>
    <title>Cyber Security Article</title>
</head>

<body>

    <h1>Cyber Security Article</h1>

    <?php
    if (isset($_GET['file'])) {
        // Simulated vulnerable code (DO NOT use this in production!)
        $file_path = "./" . $_GET['file'];
        try {

            if (file_exists($file_path)) {
                echo "<pre>" . htmlspecialchars(file_get_contents($file_path)) . "</pre>";
            } else {
                echo "File not found!";
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
    ?>
    <div>
        <h3>File List</h3>
        <ul>
            <li><a href="?file=strengthening_cyber_defenses.txt">Strengthening Cyber Defenses</a></li>
            <li><a href="?file=ransomware_resilience.txt">Ransomware Resilience</a></li>
            <li><a href="?file=emerging_cyber_threats.txt">Emerging Cyber Threats</a></li>
            <li><a href="?file=the_human_element.txt">The Human Element</a></li>
            <li><a href="?file=cryptocurrency_security.txt">Cryptocurrency Security</a></li>
        </ul>
    </div>

</body>

</html>