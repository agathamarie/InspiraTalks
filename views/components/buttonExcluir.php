<form action="../../controllers/actions/deleteAction.php" method="POST" style="display:inline;">
    <input type="hidden" name="id" value="<?php echo $evento['id']; ?>" />
    <button type="submit" class="btn delete-btn" onclick="return confirm('Você tem certeza que deseja excluir este evento?')">
        <i class="bx bx-trash"></i>
    </button>
</form>