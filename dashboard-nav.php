<div class="dashboard-nav__list">
    <div class="dashboard-nav__info">
        <img src="img/logo-match-grey.svg" alt="">

        <a href="index.php" class="active link" id="overview">
            <p>Overview</p>
        </a>
        <a href="#Article" class="link" id="article" onclick="getView('Article','viewArticle')">
            <p>Articles</p>
        </a>
        <a href="#" class="link" id="information" onclick="getView('Information','viewInformation')">
            <p>Club Information</p>
        </a>
        <a href="#" class="link" id="match"  onclick="getView('Match','viewMatches')">
            <p>Match</p>
        </a>
        <a href="#" class="link" id="player" onclick="getView('Player','viewPlayer')">
            <p>Players</p>
        </a>
    </div>
    <div>
        <a href="#" class="link center" onclick="getView('User','newUser')">
            <p>New account</p>
        </a>
        <a href="logout.php" class="button-blue">
            Log out
        </a>
    </div>
</div>


    <!-- <div class="container">
        <div class="nav">
            <div class="nav-list">
                <img src="img/logo-match.svg" alt="" class="nav-image">

                <a href="#" class="active link" id="article" onclick="getView('Article','viewArticle')">
                    <p>Article</p>
                </a>
                <a href="#" class="link" id="image" onclick="getView('Media','newImage')">
                    <p>New Image</p>
                </a>
                <a href="#" class="link" id="info" onclick="getView('Information','viewInformation')">
                    <p>Information</p>
                </a>
                <a href="#" class="link" id="match" onclick="getView('Match','viewMatches')">
                    <p>New Match</p>
                </a>
                <a href="#" class="link" id="player" onclick="getView('Player','viewPlayer')">
                    <p>Player</p>
                </a>
                <a href="logout.php" class="btn">
                    Cerrar sesión
                </a>
            </div>
        </div>
 -->
    