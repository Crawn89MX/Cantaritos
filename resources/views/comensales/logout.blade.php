<?php
session_start();
session_destroy();
?>
<script>
    window.location = "{{ url('/menu') }}";
</script>
