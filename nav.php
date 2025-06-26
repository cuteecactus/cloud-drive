<nav>
    <div id="nav-logo">
        <a href="index.php">Drive</a>
    </div>
    <form id="nav-search">
        <input type="text" placeholder="Search" name="search" autocomplete="off" required value="<?php if (isset($_GET['search'])) echo $_GET['search']; ?>">
        <button type="submit">Search</button>
    </form>

    <div id="nav-right">
        <div id="nav-adds">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M15 4H5V20H19V8H15V4ZM3 2.9918C3 2.44405 3.44749 2 3.9985 2H16L20.9997 7L21 20.9925C21 21.5489 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5447 3 21.0082V2.9918ZM11 11V8H13V11H16V13H13V16H11V13H8V11H11Z"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12.4142 5H21C21.5523 5 22 5.44772 22 6V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H10.4142L12.4142 5ZM4 5V19H20V7H11.5858L9.58579 5H4ZM11 12V9H13V12H16V14H13V17H11V14H8V12H11Z"></path>
            </svg>
        </div>

        <a id="nav-login" href="#login" style="display: <?php if (isset($_SESSION['user'])) echo 'none';
                                                        else echo 'flex'; ?>">Login</a>


        <a href="#logout" style="display: <?php if (isset($_SESSION['user'])) echo 'flex';
                                            else echo 'none'; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M5 22C4.44772 22 4 21.5523 4 21V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V6H18V4H6V20H18V18H20V21C20 21.5523 19.5523 22 19 22H5ZM18 16V13H11V11H18V8L23 12L18 16Z"></path>
            </svg>
        </a>

    </div>

    <div id="mob-nav-open">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
        </svg>
    </div>
</nav>

<div id="mob-nav">
    <svg id="mob-nav-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
        <path d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z"></path>
    </svg>

    <a href="index.php">Home</a>
    <a href="search.php">Search</a>
    <a href="#logout" style="display: <?php if (isset($_SESSION['user'])) echo 'flex';
                                        else echo 'none'; ?>">Logout</a>
    <a href="#login" style="display: <?php if (isset($_SESSION['user'])) echo 'none';
                                        else echo 'flex'; ?>">Login</a>
</div>

