/*
  Initialize the search client

  If you're logged into the Algolia dashboard, the following values for
  W1GNQCBNAA and 12c9fe4c9f106b1a8e9ddb7df3caed0c are auto-selected from
  the currently selected Algolia application.
*/
const { liteClient: algoliasearch } = window['algoliasearch/lite'];
const searchClient = algoliasearch('W1GNQCBNAA', '12c9fe4c9f106b1a8e9ddb7df3caed0c');

// Render the InstantSearch.js wrapper
// Replace INDEX_NAME with the name of your index.
const search = instantsearch({
  indexName: 'INDEX_NAME',
  searchClient,
});

search.addWidgets([
  instantsearch.widgets.searchBox({
    container: '#searchbox',
  }),

  instantsearch.widgets.hits({
    container: '#hits',
  })
]);

search.start();
