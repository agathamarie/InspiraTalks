<?php
require_once('../../controllers/SearchBar.php');

$searchController = new SearchBar();
$searchResults = [];

if (isset($_GET['eventoDigitado'])) {
    $query = $_GET['eventoDigitado'];
    $searchResults = $searchController->search($query);
}
?>

<section id="search-container">
    <form action="search.php" method="GET">
        <div id="inputContainer">
            <input id="searchbar" name="eventoDigitado" type="text" placeholder="Procure seu evento...">
            <button type="submit" id="search-button">
                <i class='bx bx-search'></i>
            </button>
        </div>
    </form>
</section>

<style>
#search-container {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

#search-container form{
    display: flex;
    width: 40%;
}
#inputContainer {
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
}

#searchbar {
    width: 100%;
    height: 50px;
    padding: 10px 20px;
    padding-right: 50px;
    border: 2px solid #C2C2C2;
    border-radius: 50px;
    outline: none;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
}
#searchbar:focus {
    border-color: #F78139;
    box-shadow: 2px 2px 15px rgba(255, 105, 180, 0.4);
}

#search-button {
    position: absolute;
    right: 0;
    width: 50px;
    height: 50px;
    background: #F78139;
    border: none;
    border-radius: 0 50% 50% 0;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.3s ease-in-out, transform 0.2s;
}
#search-button i {
    font-size: 22px;
    color: white;
    transition: 0.2s ease-in-out;
}
#search-button:hover i {
    transform: scale(1.2);
}
#search-button:hover {
    background: #ff5733;
}
#search-button:active {
    transform: scale(0.95);
}


#searchbar::placeholder {
    color: #C2C2C2;
    transition: opacity 0.3s ease-in-out;
}
#searchbar:focus::placeholder {
    opacity: 0.6;
}
</style>