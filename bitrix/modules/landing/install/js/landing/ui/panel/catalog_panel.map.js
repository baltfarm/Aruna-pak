{"version":3,"sources":["catalog_panel.js"],"names":["BX","namespace","addClass","Landing","Utils","create","append","debounce","trim","bind","proxy","setTextContent","htmlToElement","remove","style","isArray","prepend","data","encodeDataValue","TYPE_CATALOG_SECTION","TYPE_CATALOG_ELEMENT","TYPE_CATALOG_ALL","UI","Panel","Catalog","id","Content","apply","this","arguments","searchContainer","createSearchContainer","listContainer","createListContainer","searchField","createSearchField","typeSwitcher","createTypeSwitcher","iBlockSwitcher","createIblockSwitcher","resolver","iblocks","layout","overlay","title","message","getIblocks","length","margin-top","content","document","body","getInstance","instance","prototype","constructor","__proto__","superClass","search","query","requestData","replace","type","getValue","iblock","queryParams","action","Backend","Field","ButtonGroup","items","name","value","onChange","onSearchTypeChange","Dropdown","onIblockChange","onSearch","Text","placeholder","textOnly","onValueChange","props","className","renderResponse","response","oldResult","querySelector","scrollTop","map","item","subType","image","chain","reduce","accumulator","chainItem","push","join","initResponseItems","forEach","index","children","onItemClick","show","entityTypes","call","adjustIblockSwitcher","adjustEntityTypes","adjustSearchPlaceholder","Promise","resolve","getEntityTypes","input","data-placeholder","buttons","button","hidden","includes","setValue","display","loaderContainer","top","showLoader","clearTimeout","searchTimeout","setTimeout","then","hideLoader","loader","Loader","offset","hide"],"mappings":"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","file":""}