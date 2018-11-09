<% base_tag %>
<meta charset="utf-8">
<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %></title>
<% if $MetaDescription %>
	<meta name="description" content="$MetaDescription"/><% end_if %>
$ExtraMeta
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="canonical" href="$AbsoluteLink"/>

<meta property="og:title" content="$OGTitle"/>
<meta property="og:description" content="$OGDescription"/>
<meta property="og:site_name" content="$OGSiteName"/>
<meta property="og:url" content="$AbsoluteLink"/>
<meta property="og:type" content="website"/>

<% if $OGImage %>
	<meta property="og:image" content="$OGImage.CroppedImage(1200,630).AbsoluteURL"/>
	<meta name="og:image:width" content="1200">
	<meta name="og:image:height" content="630">
<% end_if %>

<% if $OGImage %>
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="$OGImage.croppedImage(560,300).AbsoluteURL">
<% else %>
	<meta name="twitter:card" content="summary">
<% end_if %>
<meta name="twitter:site" content="$OGTwitterSite">
<meta name="twitter:title" content="$OGTitle">
<meta name="twitter:description" content="$OGDescription">

<link rel="stylesheet" href="https://www.ft.com/__origami/service/build/v2/bundles/css?modules=o-grid@^4.3.3,o-colors@^4.1.2,o-fonts@^3.0.1,o-header@^7.1.0,o-footer@^6.0.2,o-video@^4.1.2,o-share@^6.0.1,o-normalise@^1.5.1" />
<link href="$ThemeDir/dist/main-bundle.css?v={$AssetsVersion}" rel="stylesheet">