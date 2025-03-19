<button id="alterarButton" class="btn edit-btn" data-modal="<?= $modalEspecifico ?>"><i class="bx bx-edit"></i></button>

<?php
include("../components/modals/modalAlterar.php");
?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const addButton = document.getElementById("alterarButton");
        const modalId = addButton.getAttribute("data-modal"); 
        const modal = document.getElementById(`modalAlterar`);
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