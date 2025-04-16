"use strict";

/*
  Initialize the search client

  If you're logged into the Algolia dashboard, the following values for
  W1GNQCBNAA and 12c9fe4c9f106b1a8e9ddb7df3caed0c are auto-selected from
  the currently selected Algolia application.
*/
var algoliasearch = window['algoliasearch/lite'].liteClient;
var searchClient = algoliasearch('W1GNQCBNAA', '12c9fe4c9f106b1a8e9ddb7df3caed0c'); // Render the InstantSearch.js wrapper
// Replace INDEX_NAME with the name of your index.

var search = instantsearch({
  indexName: 'INDEX_NAME',
  searchClient: searchClient
});
search.addWidgets([instantsearch.widgets.searchBox({
  container: '#searchbox'
}), instantsearch.widgets.hits({
  container: '#hits'
})]);
search.start();