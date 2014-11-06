<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">@import url("jscalendar/calendar-blue.css");</style>
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-es.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>
<script type="text/javascript">
window.onload = function() {
  Calendar.setup({
    inputField: "fecha",
    ifFormat:   "%d/%m/%Y",
    button:     "selector"
  });
}
</script>
</head>

<body>
<p>Introduce la fecha pulsando sobre la imagen del calendario</p>
<input type="text" name="date" id="fecha" readonly="readonly" />
<img src="jscalendar/img.gif" id="selector" />
</body>
</html>
