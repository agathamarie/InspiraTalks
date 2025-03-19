<button id="addButton" data-modal="<?= $modalEspecifico ?>">+ ADICIONAR</button>
<style>
    #addButton{
        background-color: var(--darkorange);
        border: none;
        color: var(--white);
        font-size: 15px;
        font-weight: 600;
        width: 160px;
        height: 40px;
        border-radius: 5px;
        cursor: pointer;
        transition: width 0.4s ease-in-out, padding 0.4s ease-in-out;
    }
    #addButton:hover{
        background-color: var(--ligthorange);
        transform: scale(0.95);
    }
</style>


<?php
include("../components/modals/modalAdd.php");
?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const addButton = document.getElementById("addButton");
        const modalId = addButton.getAttribute("data-modal"); 
        const modal = document.getElementById(`modalAdd`);
        const buttonClose = modal.querySelector(".close-button");

        addButton.onclick = function () {
            if (modal) {
                modal.showModal();
            }
        };

        buttonClose.onclick = function () {
            modal.close();
        };
    });
</script>
