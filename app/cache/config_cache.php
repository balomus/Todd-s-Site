<?php /* bolt */ die(); ?>json:{"general":{"database":{"driver":"pdo_sqlite","host":"localhost","slaves":[],"dbname":"bolt","prefix":"bolt_","charset":"utf8","randomfunction":"RANDOM()","databasename":"bolt","path":"C:\/xampp\/htdocs\/bolt\/app\/database\/bolt.db"},"sitename":"A sample site","homepage":"home\/1","homepage_template":"home.twig","locale":"en_GB","recordsperpage":10,"recordsperdashboardwidget":5,"systemlog":{"enabled":true},"changelog":{"enabled":false},"debuglog":{"enabled":false,"level":"DEBUG","filename":"bolt-debug.log"},"debug":true,"debug_show_loggedoff":false,"debug_error_level":8181,"debug_enable_whoops":true,"debug_permission_audit_mode":false,"strict_variables":false,"theme":"my-theme","debug_compressjs":true,"debug_compresscss":true,"listing_template":"listing.twig","listing_records":6,"listing_sort":"datepublish DESC","caching":{"config":true,"rendering":false,"templates":true,"request":false,"duration":10,"authenticated":false},"wysiwyg":{"images":false,"tables":false,"fontcolor":false,"align":false,"subsuper":false,"embed":false,"anchor":false,"underline":false,"strike":false,"blockquote":false,"codesnippet":false,"specialchar":false,"styles":false,"ck":{"allowedContent":true,"autoParagraph":true,"contentsCss":["\/app\/view\/css\/ckeditor-contents.css","\/app\/view\/css\/ckeditor.css"],"filebrowserWindowWidth":640,"filebrowserWindowHeight":480,"disableNativeSpellChecker":true,"allowNbsp":false},"filebrowser":{"browseUrl":"\/async\/filebrowser\/","imageBrowseUrl":"\/bolt\/files\/files"},"ruler":false},"liveeditor":true,"canonical":"localhost","developer_notices":false,"cookies_use_remoteaddr":true,"cookies_use_browseragent":false,"cookies_use_httphost":true,"cookies_lifetime":1209600,"enforce_ssl":false,"thumbnails":{"default_thumbnail":[160,120],"default_image":[1000,750],"quality":80,"cropping":"crop","notfound_image":"view\/img\/default_notfound.png","error_image":"view\/img\/default_error.png","save_files":false,"allow_upscale":false,"exif_orientation":true},"accept_file_types":["twig","html","js","css","scss","gif","jpg","jpeg","png","ico","zip","tgz","txt","md","doc","docx","pdf","epub","xls","xlsx","ppt","pptx","mp3","ogg","wav","m4a","mp4","m4v","ogv","wmv","avi","webm","svg"],"hash_strength":10,"branding":{"name":"Bolt","path":"\/bolt","provided_by":[]},"maintenance_mode":false,"headers":{"x_frame_options":true},"payoff":"The amazing payoff goes here","maintenance_template":"maintenance_default.twig","cron_hour":3,"notfound":"page\/not-found","record_template":"record.twig","taxonomy_sort":"DESC","search_results_template":"listing.twig","search_results_records":10,"add_jquery":false,"htmlcleaner":{"allowed_tags":["div","p","br","hr","s","u","strong","em","i","b","li","ul","ol","blockquote","pre","code","tt","h1","h2","h3","h4","h5","h6","dd","dl","dh","table","tbody","thead","tfoot","th","td","tr","a","img"],"allowed_attributes":["id","class","style","name","value","href","src"]},"cookies_domain":"","session_use_storage_handler":true,"extensions":{"site":"https:\/\/extensions.bolt.cm\/","stability":"stable","enabled":true}},"taxonomy":{"tags":{"slug":"tags","singular_slug":"tag","behaves_like":"tags","postfix":"Add some freeform tags. Start a new tag by typing a comma or space.","allow_spaces":false,"name":"Tags","singular_name":"Tag","has_sortorder":false,"tagcloud":true},"chapters":{"slug":"chapters","singular_slug":"chapter","behaves_like":"grouping","options":{"main":"The main chapter","meta":"Meta Chapter","other":"The other stuff"},"has_sortorder":true,"name":"Chapters","singular_name":"Chapter","allow_spaces":false},"categories":{"name":"Categories","slug":"categories","singular_name":"Category","singular_slug":"category","behaves_like":"categories","multiple":true,"options":{"news":"news","events":"events","movies":"movies","music":"music","books":"books","life":"life","love":"love","fun":"fun"},"has_sortorder":false,"allow_spaces":false}},"contenttypes":{"pages":{"name":"Pages","singular_name":"Page","fields":{"name":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"text","class":"form-control large"},"template":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"templateselect","class":"form-control"}},"slug":"pages","singular_slug":"page","show_on_dashboard":true,"show_in_menu":true,"sort":false,"default_status":"draft","viewless":false,"liveeditor":true,"tablename":"pages","groups":false},"home":{"name":"Home","singular_name":"Home Page","default_status":"published","fields":{"name":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"text","class":"form-control large"},"title":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"text","height":"300px","class":"form-control"},"subtitle":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"text","height":"300px","class":"form-control"},"mission_statement":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"html","height":"300px","class":"form-control"},"image":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"image","extensions":["gif","jpg","jpeg","png"],"class":"form-control"}},"record_template":"index.twig","slug":"home","singular_slug":"home-page","show_on_dashboard":true,"show_in_menu":true,"sort":false,"viewless":false,"liveeditor":true,"tablename":"home","groups":false},"news":{"name":"News","singular_name":"News Item","slug":"news","singular_slug":"news","listing_template":"news.twig","record_template":"newsitem.twig","default_status":"published","fields":{"title":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"text","class":"form-control large"},"slug":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"slug","uses":["title"],"class":"form-control"},"image":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"image","extensions":["gif","jpg","jpeg","png"],"class":"form-control"},"excerpt":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"textarea","height":"150px","class":"form-control"},"body":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"html","height":"300px","class":"form-control"}},"show_on_dashboard":true,"show_in_menu":true,"sort":false,"viewless":false,"liveeditor":true,"tablename":"news","groups":false},"board":{"name":"Board","singular_name":"Board Member","slug":"board","singular_slug":"board","listing_template":"board.twig","record_template":"boardmember.twig","default_status":"published","fields":{"name":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"text","class":"form-control large"},"slug":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"slug","uses":["name"],"class":"form-control"},"image":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"image","extensions":["gif","jpg","jpeg","png"],"class":"form-control"},"body":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"html","height":"300px","class":"form-control"}},"show_on_dashboard":true,"show_in_menu":true,"sort":false,"viewless":false,"liveeditor":true,"tablename":"board","groups":false},"clinicsmeetings":{"name":"Clinics And Meetings","singular_name":"Clinic Or Meeting","slug":"clinicsmeetings","singular_slug":"clinicormeeting","listing_template":"clinicsandmeetings.twig","record_template":"clinicormeeting.twig","default_status":"published","fields":{"meeting":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"text","class":"form-control large"},"date_and_time":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"datetime","height":"large","class":"form-control"},"location":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"text","height":"large","class":"form-control"},"site":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"text","height":"large","class":"form-control"},"sport":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"select","values":{"Basketball":"Basketball","Football":"Football"},"class":"form-control"}},"sort":"date_and_time ASC","show_on_dashboard":true,"show_in_menu":true,"viewless":false,"liveeditor":true,"tablename":"clinicsmeetings","groups":false},"promotionalpoints":{"name":"Promotional Points","singular_name":"Promotional Point","slug":"promotionalpoints","singular_slug":"promotionalpoint","listing_template":"promotionalpoints.twig","default_status":"published","fields":{"text":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"html","class":"form-control large"}},"show_on_dashboard":true,"show_in_menu":true,"sort":false,"viewless":false,"liveeditor":true,"tablename":"promotionalpoints","groups":false},"rulechanges":{"name":"Rule Changes","singular_name":"Rule Change","slug":"rulechanges","singular_slug":"rulechange","listing_template":"rulechanges.twig","default_status":"published","fields":{"title":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"text","class":"form-control large"},"logo":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"image","extensions":["gif","jpg","jpeg","png"],"class":"form-control"},"text":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"html","class":"form-control large"},"sport":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"select","values":{"Basketball":"Basketball","Football":"Football"},"class":"form-control"}},"sort":"sport ASC","show_on_dashboard":true,"show_in_menu":true,"viewless":false,"liveeditor":true,"tablename":"rulechanges","groups":false},"committees":{"name":"Committees","singular_name":"Committee","slug":"committees","singular_slug":"committee","listing_template":"committees.twig","default_status":"published","fields":{"committee":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"text","class":"form-control large"},"members":{"label":"","variant":"","default":"","pattern":"","group":"ungrouped","type":"html","class":"form-control large"}},"sort":"committee ASC","show_on_dashboard":true,"show_in_menu":true,"viewless":false,"liveeditor":true,"tablename":"committees","groups":false}},"menu":{"main":[{"label":"Home","title":"This is the first menu item.","path":"homepage","class":"first"},{"label":"Second item","path":"entry\/1","submenu":[{"label":"Sub 1","path":"entry\/2"},{"label":"Sub 2","class":"menu-item-class","path":"entry\/3"},{"label":"Sub 3","path":"entry\/4"},{"label":"Sub 4","class":"sub-class","path":"page\/3"}]},{"label":"All pages","path":"pages\/"},{"label":"The Bolt site","link":"http:\/\/bolt.cm","class":"last"}]},"routing":{"homepage":{"path":"\/","defaults":{"_controller":"Bolt\\Controllers\\Frontend::homepage"}},"search":{"path":"\/search","defaults":{"_controller":"Bolt\\Controllers\\Frontend::search"}},"preview":{"path":"\/preview\/{contenttypeslug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::preview"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getAnyContentTypeRequirement"}},"contentlink":{"path":"\/{contenttypeslug}\/{slug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::record"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getAnyContentTypeRequirement"}},"taxonomylink":{"path":"\/{taxonomytype}\/{slug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::taxonomy"},"requirements":{"taxonomytype":"Bolt\\Controllers\\Routing::getAnyTaxonomyTypeRequirement"}},"contentlisting":{"path":"\/{contenttypeslug}","defaults":{"_controller":"Bolt\\Controllers\\Frontend::listing"},"requirements":{"contenttypeslug":"Bolt\\Controllers\\Routing::getPluralContentTypeRequirement"}}},"permissions":{"roles":{"editor":{"description":"This user can edit some content.","label":"Editor"},"chief-editor":{"description":"This user can edit any content in the system.","label":"Chief Editor"},"admin":{"description":"User-level administrator.","label":"Administrator"},"developer":{"description":"Developer access. Only required to change system-level settings.","label":"Developer"},"guest":{"description":"This user can log on, but is not allowed to edit any content.","label":"Guest Editor"}},"roles-hierarchy":{"manipulate":{"admin":[],"developer":["admin"],"chief-editor":["admin","developer"],"editor":["admin","developer","chief-editor"],"guest":["admin","developer","chief-editor"]}},"global":{"about":["everyone"],"clearcache":["admin","developer"],"contentaction":["editor","admin","developer"],"dashboard":["everyone"],"dbcheck":["admin","developer"],"dbupdate":["admin","developer"],"dbupdate_result":["admin","developer"],"extensions":["developer"],"extensions:config":["developer"],"fileedit":["admin","developer"],"files:config":["developer"],"files:theme":["developer"],"files:uploads":["admin","developer","chief-editor","editor"],"files":["admin","developer","chief-editor","editor"],"prefill":["developer"],"profile":["everyone"],"settings":["admin","developer","everyone"],"translation":["developer"],"useraction":["admin","developer"],"useredit":["admin","developer"],"users":["admin","developer"],"roles":["admin","developer"],"maintenance-mode":["everyone"],"omnisearch":["everyone"],"changelog":["admin","developer","chief-editor"],"systemlog":["admin","developer"],"login":["anonymous"],"postLogin":["anonymous"],"logout":["everyone"]},"contenttype-all":{"edit":["developer","admin","chief-editor"],"create":["developer","admin","chief-editor"],"publish":["developer","admin","chief-editor"],"depublish":["developer","admin","chief-editor"],"delete":["developer","admin"],"change-ownership":["developer","admin"]},"contenttype-default":{"edit":["editor"],"create":["editor"],"change-ownership":["owner"],"view":["anonymous"]},"contenttypes":null},"extensions":[],"theme":[],"version":"2.2.19-pl1"}