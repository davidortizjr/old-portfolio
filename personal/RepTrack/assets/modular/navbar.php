<?php
if (isset($page) && $page == 'home_page') {
    $greeting = "HI, DAVID!";
} elseif (isset($page) && $page == 'workouts') {
    $greeting = $_SESSION['program'] ?? 'WORKOUTS';
} elseif (isset($page) && $page == 'progress') {
    $greeting = "PROGRESS";
} else {
    $greeting = 'REP TRACK';
}
?>

<nav class="red p-4 text-white font-semibold rounded-bottom-4">
    <div class="row">
        <div class="col">
            <div class="fw-semibold fs-5">
                <?php echo isset($greeting) ? $greeting : 'REP TRACK'; ?>
            </div>
        </div>
        <div class="col d-flex justify-content-end gap-3 fs-3">
            <i class="bi bi-gear-wide-connected"></i>
            <i class="bi bi-person"></i>
        </div>
    </div>
</nav>