<header id="headerAdm">
    <a href="../admin/perfilAdm.php" id="iconPerfil">
        <i class='bx bxs-user-circle'></i>
    </a>
</header>

<style>
    :root {
        --darkblue: #313A87;
        --ligthblue: #4B7198;
        --darkorange: #F78139;
        --ligthorange: #FDB346;
        --white: #F5F2ED;
        --black: #120B01;
    }

    #headerAdm{
        background-color: var(--ligthblue);
        display: flex;
        justify-content: flex-end;
        align-items: center;
        height: 60px;
        width: 100%;
        justify-content: flex-end;
    }
    #headerAdm i{
        font-size: 40px;
        color: var(--white);
        transition: 0.3s;
    }

    #headerAdm a{
        padding: 5px;
        border-radius: 8px;
        transition: background-color 0.3s, transform 0.3s;
        padding-right: 2rem;
    }

    #headerAdm a:hover i {
        color: var(--darkorange);
        transform: scale(2.05);
        transform: rotate(10deg);
    }

</style>