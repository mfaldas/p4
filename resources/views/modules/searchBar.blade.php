<div class='searchBarSection'>

    <form method='GET' action='/verbs/search'>

        <div class='col-sm-8'>
        <span class="pull-right">

            <fieldset id='searchBar'>
                <label for='searchTerm'>Find a verb:</label>
                <input type='text' name='searchTerm' id='searchTerm' value='{{ $searchTerm or '' }}'>
            </fieldset>

        </span>
        </div>

        <div class='col-sm-4'>
        <span class="pull-left">

            <input type='submit' id='searchButton' value='Search' class='btn btn-primary btn-small'>
        </span>
        </div>

    </form>

</div>