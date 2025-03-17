<section id="search-container">
    <form action="search.php" method="GET">
        <div id="inputContainer">
            <input id="searchbar" name="eventoDigitado" type="text" placeholder="Procure seu evento...">
            <div type="submit" id="search-button">
                <i  id="search-icon" class='bx bx-search'></i>
            </div>
        </div>
    </form>
</section>

<style>
#search-container {
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

#search-container form{
    display: flex;
    width: 60%;
}
#inputContainer {
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
}

#searchbar {
    width: 100%;
    height: 40px;
    padding: 10px 20px;
    padding-right: 50px;
    border: 2px solid #C2C2C2;
    border-radius: 50px;
    outline: none;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
}
#searchbar:focus {
    border-color: #F78139;
}

#search-button {
    position: absolute;
    right: 0;
    width: 50px;
    height: 40px;
    border: none;
    border-radius: 0 50% 50% 0;
    cursor: text;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.2s;
}
#search-button i {
    font-size: 22px;
    color: #C2C2C2;
    transition: 0.2s ease-in-out;
}
#search-button:hover i {
    transform: scale(1.2);
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