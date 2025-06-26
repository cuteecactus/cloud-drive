<?php require_once('header.php'); ?>
<title>CuteeCloud</title>


<div id="home-files-container">
    <div id="home-files-head">
        <h1>Your Files</h1>
        <div class="files-grid-layout-options">
            <svg class="grid-view-list active-grid-view" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M2 4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4ZM4 5V19H20V5H4ZM6 7H8V9H6V7ZM8 11H6V13H8V11ZM6 15H8V17H6V15ZM18 7H10V9H18V7ZM10 15H18V17H10V15ZM18 11H10V13H18V11Z"></path>
            </svg>
            <svg class="grid-view-grid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M21 3C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H21ZM11 13H4V19H11V13ZM20 13H13V19H20V13ZM11 5H4V11H11V5ZM20 5H13V11H20V5Z"></path>
            </svg>
        </div>
    </div>

    <div id="home-files"></div>
</div>


<script>
    document.querySelector('.grid-view-list').addEventListener('click', () => {
        document.querySelectorAll('.file').forEach(file => {
            file.style.display = 'flex';
        });
    });
    document.querySelector('.grid-view-grid').addEventListener('click', () => {
        document.querySelectorAll('.file').forEach(file => {
            file.style.display = 'none';
        });
    });
</script>


<?php require_once('footer.php'); ?>