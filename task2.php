<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .highlight {
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>
    <form method="post" action="task2.php">
        <input type="text" name="searchText" placeholder="Enter search text">
        <button type="submit" name="searchBtn">search</button>
    </form>

    <ul>
        <?php
        $countries = array
        (
            'Ukraine', 'United States', 'United Kingdom', 'Canada', 'Germany', 'Australia', 'France'
        );

        // Функція для підсвічування шуканого тексту в країні
        function highlightText($text, $search) 
        {
            // Регістронезалежний пошук і заміна
            return preg_replace('/(' . preg_quote($search, '/') . ')/iu', '<span class="highlight">$1</span>', $text);
        }


        if (isset($_POST['searchBtn'])) 
        {
            $searchText = $_POST['searchText'];

            foreach ($countries as $country) 
            {
                // Перевірка
                if (empty($searchText) || stripos($country, $searchText) !== false) 
                {
                    // Підсвічування шуканого тексту
                    $highlightedCountry = highlightText($country, $searchText);
                    echo "<li>$highlightedCountry</li>";
                }
            }

        } 
        else 
        {
            // Виведення всіх країн за замовчуванням
            foreach ($countries as $country) 
            {
                echo "<li>$country</li>";
            }
        }

        ?>
    </ul>
</body>
</html>
