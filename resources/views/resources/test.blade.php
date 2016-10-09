<html><head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <meta name="author" content="빌 게이츠">
	  <meta name="company" content="Microsoft">
	<style type="text/css">
	  html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
	  table { border-collapse:collapse; page-break-after:always }
	  .gridlines td { border:1px dotted black }
	  .gridlines th { border:1px dotted black }
	  .b { text-align:center }
	  .e { text-align:center }
	  .f { text-align:right }
	  .inlineStr { text-align:left }
	  .n { text-align:right }
	  .s { text-align:left }
	  td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  td.style1 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style1 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style2 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style2 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style3 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style3 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style4 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:3px double #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style4 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:3px double #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style5 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style5 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style6 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style6 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style7 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:3px double #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style7 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:3px double #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style8 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style8 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style9 { vertical-align:middle; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style9 { vertical-align:middle; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style10 { vertical-align:middle; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style10 { vertical-align:middle; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style11 { vertical-align:middle; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:3px double #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style11 { vertical-align:middle; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:3px double #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style12 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:9pt; background-color:#FFFFFF }
	  th.style12 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:9pt; background-color:#FFFFFF }
	  td.style13 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style13 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style14 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:8pt; background-color:#FFFFFF }
	  th.style14 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:8pt; background-color:#FFFFFF }
	  td.style15 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style15 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style16 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  th.style16 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  td.style17 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  th.style17 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  td.style18 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  th.style18 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  td.style19 { vertical-align:bottom; border-bottom:3px solid #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  th.style19 { vertical-align:bottom; border-bottom:3px solid #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  td.style20 { vertical-align:bottom; border-bottom:3px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  th.style20 { vertical-align:bottom; border-bottom:3px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  td.style21 { vertical-align:bottom; border-bottom:3px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  th.style21 { vertical-align:bottom; border-bottom:3px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:11pt; background-color:white }
	  td.style22 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:white }
	  th.style22 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:white }
	  td.style23 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:3px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:white }
	  th.style23 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:3px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:white }
	  td.style24 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  th.style24 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  td.style25 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  th.style25 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  td.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  th.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  td.style27 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:white }
	  th.style27 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:white }
	  td.style28 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:white }
	  th.style28 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:white }
	  td.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  th.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  td.style30 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  th.style30 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  td.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  td.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  td.style33 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style33 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  td.style34 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style34 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  td.style35 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style35 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  td.style36 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style36 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style37 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style37 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  td.style38 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style38 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  td.style39 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style39 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style40 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:white }
	  th.style40 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:white }
	  td.style41 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:white }
	  th.style41 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:white }
	  td.style42 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:3px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:white }
	  th.style42 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:3px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:white }
	  td.style43 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style43 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style44 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style44 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style45 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style45 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style46 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style46 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  td.style47 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style47 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style48 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style48 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style49 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style49 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style50 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  th.style50 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  td.style51 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  th.style51 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  td.style52 { vertical-align:middle; text-align:center; border-bottom:1px dashed #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:10pt; background-color:white }
	  th.style52 { vertical-align:middle; text-align:center; border-bottom:1px dashed #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:10pt; background-color:white }
	  td.style53 { vertical-align:middle; text-align:center; border-bottom:1px dashed #000000 !important; border-top:1px dashed #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:10pt; background-color:white }
	  th.style53 { vertical-align:middle; text-align:center; border-bottom:1px dashed #000000 !important; border-top:1px dashed #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:10pt; background-color:white }
	  td.style54 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  th.style54 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  td.style55 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  th.style55 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  td.style56 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  th.style56 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  td.style57 { vertical-align:bottom; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  th.style57 { vertical-align:bottom; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  td.style58 { vertical-align:bottom; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  th.style58 { vertical-align:bottom; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  td.style59 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style59 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style60 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style60 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style61 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style61 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style62 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style62 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style63 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style63 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style64 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style64 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style65 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style65 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style66 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style66 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style67 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style67 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style68 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:13pt; background-color:#FFFFFF }
	  th.style68 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'바탕'; font-size:13pt; background-color:#FFFFFF }
	  td.style69 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:3px double #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style69 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:3px double #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style70 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style70 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style71 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style71 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style72 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:3px double #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style72 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:3px double #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style73 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style73 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style74 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:3px double #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style74 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:3px double #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style75 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style75 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style76 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:3px double #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style76 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:3px double #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style77 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style77 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style78 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style78 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style79 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style79 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style80 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  th.style80 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'바탕'; font-size:11pt; background-color:#FFFFFF }
	  td.style81 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style81 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style82 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style82 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style83 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style83 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style84 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style84 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style85 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style85 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style86 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style86 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style87 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style87 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style88 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style88 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style89 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style89 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style90 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style90 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style91 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style91 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style92 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style92 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style93 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style93 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style94 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style94 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style95 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style95 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style96 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px double #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style96 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px double #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style97 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style97 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style98 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px double #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style98 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px double #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style99 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style99 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style100 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:3px double #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style100 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:3px double #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style101 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:3px double #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style101 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:3px double #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style102 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:3px double #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style102 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:3px double #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style103 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style103 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style104 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style104 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style105 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:14pt; background-color:#FFFFFF }
	  th.style105 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:14pt; background-color:#FFFFFF }
	  td.style106 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:#FFFFFF }
	  th.style106 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:#FFFFFF }
	  td.style107 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:30pt; background-color:#FFFFFF }
	  th.style107 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:30pt; background-color:#FFFFFF }
	  td.style108 { vertical-align:middle; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:30pt; background-color:#FFFFFF }
	  th.style108 { vertical-align:middle; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:30pt; background-color:#FFFFFF }
	  td.style109 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style109 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style110 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style110 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style111 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style111 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style112 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style112 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style113 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style113 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style114 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style114 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style115 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style115 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style116 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style116 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style117 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style117 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style118 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style118 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style119 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style119 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style120 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style120 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style121 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  th.style121 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:#FFFFFF }
	  td.style122 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style122 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style123 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style123 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style124 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style124 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style125 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style125 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style126 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  th.style126 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  td.style127 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  th.style127 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  td.style128 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style128 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  td.style129 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style129 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  td.style130 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  th.style130 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  td.style131 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  th.style131 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  td.style132 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  th.style132 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  td.style133 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  th.style133 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  td.style134 { vertical-align:middle; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  th.style134 { vertical-align:middle; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  td.style135 { vertical-align:middle; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  th.style135 { vertical-align:middle; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  td.style136 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  th.style136 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  td.style137 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  th.style137 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  td.style138 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  th.style138 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:18pt; background-color:white }
	  td.style139 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  th.style139 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  td.style140 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  th.style140 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  td.style141 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style141 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  td.style142 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style142 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  td.style143 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  th.style143 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'맑은 고딕'; font-size:12pt; background-color:white }
	  td.style144 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style144 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  td.style145 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  th.style145 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:#FFFFFF }
	  td.style146 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  th.style146 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  td.style147 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  th.style147 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  td.style148 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  th.style148 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  td.style149 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  th.style149 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'돋움'; font-size:10pt; background-color:#FFFFFF }
	  td.style150 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  th.style150 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  td.style151 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  th.style151 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  td.style152 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  th.style152 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  td.style153 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  th.style153 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  td.style154 { vertical-align:middle; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  th.style154 { vertical-align:middle; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:3px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  td.style155 { vertical-align:middle; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  th.style155 { vertical-align:middle; text-align:center; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  td.style156 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:14pt; background-color:white }
	  th.style156 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:14pt; background-color:white }
	  td.style157 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  th.style157 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  td.style158 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  th.style158 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:3px solid #000000 !important; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  td.style159 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  th.style159 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  td.style160 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  th.style160 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  td.style161 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  th.style161 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  td.style162 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  th.style162 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:3px double #000000 !important; border-top:none #000000; border-left:none #000000; border-right:3px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:28pt; background-color:white }
	  td.style163 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:white }
	  th.style163 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'HY동녘B'; font-size:11pt; background-color:white }
	  td.style164 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  th.style164 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'HY동녘B'; font-size:10pt; background-color:white }
	  table.sheet0 col.col0 { width:8.133333239999999pt }
	  table.sheet0 col.col1 { width:8.133333239999999pt }
	  table.sheet0 col.col2 { width:8.133333239999999pt }
	  table.sheet0 col.col3 { width:8.133333239999999pt }
	  table.sheet0 col.col4 { width:8.133333239999999pt }
	  table.sheet0 col.col5 { width:8.133333239999999pt }
	  table.sheet0 col.col6 { width:8.133333239999999pt }
	  table.sheet0 col.col7 { width:11.52222209pt }
	  table.sheet0 col.col8 { width:10.16666655pt }
	  table.sheet0 col.col9 { width:11.52222209pt }
	  table.sheet0 col.col10 { width:8.811111009999999pt }
	  table.sheet0 col.col11 { width:9.48888878pt }
	  table.sheet0 col.col12 { width:8.811111009999999pt }
	  table.sheet0 col.col13 { width:10.84444432pt }
	  table.sheet0 col.col14 { width:9.48888878pt }
	  table.sheet0 col.col15 { width:9.48888878pt }
	  table.sheet0 col.col16 { width:10.16666655pt }
	  table.sheet0 col.col17 { width:8.811111009999999pt }
	  table.sheet0 col.col18 { width:10.84444432pt }
	  table.sheet0 col.col19 { width:9.48888878pt }
	  table.sheet0 col.col20 { width:10.84444432pt }
	  table.sheet0 col.col21 { width:10.84444432pt }
	  table.sheet0 col.col22 { width:10.84444432pt }
	  table.sheet0 col.col23 { width:10.84444432pt }
	  table.sheet0 col.col24 { width:10.84444432pt }
	  table.sheet0 col.col25 { width:10.84444432pt }
	  table.sheet0 col.col26 { width:10.84444432pt }
	  table.sheet0 col.col27 { width:10.84444432pt }
	  table.sheet0 col.col28 { width:10.84444432pt }
	  table.sheet0 col.col29 { width:18.29999979pt }
	  table.sheet0 col.col30 { width:10.84444432pt }
	  table.sheet0 col.col31 { width:10.84444432pt }
	  table.sheet0 col.col32 { width:10.84444432pt }
	  table.sheet0 col.col33 { width:10.84444432pt }
	  table.sheet0 col.col34 { width:10.84444432pt }
	  table.sheet0 col.col35 { width:10.84444432pt }
	  table.sheet0 col.col36 { width:10.84444432pt }
	  table.sheet0 col.col37 { width:10.84444432pt }
	  table.sheet0 col.col38 { width:42.02222174pt }
	  table.sheet0 tr { height:15pt }
	  table.sheet0 tr.row0 { height:9.75pt }
	  table.sheet0 tr.row1 { height:16.5pt }
	  table.sheet0 tr.row2 { height:15pt }
	  table.sheet0 tr.row3 { height:15.75pt }
	  table.sheet0 tr.row4 { height:15.75pt }
	  table.sheet0 tr.row5 { height:25.5pt }
	  table.sheet0 tr.row6 { height:25.5pt }
	  table.sheet0 tr.row7 { height:25.5pt }
	  table.sheet0 tr.row8 { height:25.5pt }
	  table.sheet0 tr.row9 { height:25.5pt }
	  table.sheet0 tr.row10 { height:25.5pt }
	  table.sheet0 tr.row11 { height:25.5pt }
	  table.sheet0 tr.row12 { height:25.5pt }
	  table.sheet0 tr.row13 { height:25.5pt }
	  table.sheet0 tr.row14 { height:25.5pt }
	  table.sheet0 tr.row15 { height:25.5pt }
	  table.sheet0 tr.row16 { height:25.5pt }
	  table.sheet0 tr.row17 { height:25.5pt }
	  table.sheet0 tr.row18 { height:25.5pt }
	  table.sheet0 tr.row19 { height:25.5pt }
	  table.sheet0 tr.row20 { height:25.5pt }
	  table.sheet0 tr.row21 { height:25.5pt }
	  table.sheet0 tr.row22 { height:25.5pt }
	  table.sheet0 tr.row23 { height:25.5pt }
	  table.sheet0 tr.row24 { height:25.5pt }
	  table.sheet0 tr.row25 { height:25.5pt }
	  table.sheet0 tr.row26 { height:25.5pt }
	  table.sheet0 tr.row27 { height:22.5pt }
	  table.sheet0 tr.row28 { height:20.25pt }
	  table.sheet0 tr.row29 { height:22.5pt }
	  table.sheet0 tr.row30 { height:22.5pt }
	  table.sheet0 tr.row31 { height:16.5pt }
	</style>
  </head>

  <body>
<style>
@page { left-margin: 0.5511811023622047in; right-margin: 0.5118110236220472in; top-margin: 0.4724409448818898in; bottom-margin: 0.4724409448818898in; }
body { left-margin: 0.5511811023622047in; right-margin: 0.5118110236220472in; top-margin: 0.4724409448818898in; bottom-margin: 0.4724409448818898in; }
</style>
	<table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
		<colgroup><col class="col0">
		<col class="col1">
		<col class="col2">
		<col class="col3">
		<col class="col4">
		<col class="col5">
		<col class="col6">
		<col class="col7">
		<col class="col8">
		<col class="col9">
		<col class="col10">
		<col class="col11">
		<col class="col12">
		<col class="col13">
		<col class="col14">
		<col class="col15">
		<col class="col16">
		<col class="col17">
		<col class="col18">
		<col class="col19">
		<col class="col20">
		<col class="col21">
		<col class="col22">
		<col class="col23">
		<col class="col24">
		<col class="col25">
		<col class="col26">
		<col class="col27">
		<col class="col28">
		<col class="col29">
		<col class="col30">
		<col class="col31">
		<col class="col32">
		<col class="col33">
		<col class="col34">
		<col class="col35">
		<col class="col36">
		<col class="col37">
		<col class="col38">
		</colgroup><tbody>
		  <tr class="row0">
			<td class="column0 style107 s style108" colspan="26" rowspan="3">SETTING 성적서 ( 418 )  </td>
			<td class="column26 style105 s style106" colspan="12" rowspan="3">호기  201 년    월     일</td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row1">
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row2">
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row3">
			<td class="column0 style118 s style121" colspan="3" rowspan="2">번호</td>
			<td class="column3 style89 s style89" colspan="8" rowspan="2">관리항목</td>
			<td class="column11 style90 s style95" colspan="9" rowspan="2">S P E C</td>
			<td class="column20 style90 s style95" colspan="6" rowspan="2">검사구</td>
			<td class="column26 style96 s style97" colspan="4" rowspan="2">작업자</td>
			<td class="column30 style96 s style99" colspan="5" rowspan="2">품질</td>
			<td class="column35 style100 s style104" colspan="3" rowspan="2">판 정</td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row4">
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row5">
			<td class="column0 style109 n style111" colspan="3">1</td>
			<td class="column3 style112 s style114" colspan="8">외 관</td>
			<td class="column11 style112 s style114" colspan="9">외관<br>
(유해한 결함 없을것)</td>
			<td class="column20 style115 s style117" colspan="6">육안</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row6">
			<td class="column0 style59 n style61" colspan="3">2</td>
			<td class="column3 style62 s style61" colspan="8">전조前경</td>
			<td class="column11 style63 s style65" colspan="9">&nbsp;Ø9.08(±0.01)</td>
			<td class="column20 style63 s style65" colspan="6">M/Meter</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row7">
			<td class="column0 style59 n style61" colspan="3">3</td>
			<td class="column3 style62 s style61" colspan="8">TAPER 소경</td>
			<td class="column11 style63 s style65" colspan="9">Ø10.40(+0/-0.08)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row8">
			<td class="column0 style59 n style61" colspan="3">4</td>
			<td class="column3 style62 s style61" colspan="8">TAPER 각도</td>
			<td class="column11 style63 s style65" colspan="9">19˚10'(+0'/-10')</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row9">
			<td class="column0 style59 n style61" colspan="3">5</td>
			<td class="column3 style62 s style61" colspan="8">GROOVE 위치</td>
			<td class="column11 style63 s style65" colspan="9">42.53(+0/-0.05)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row10">
			<td class="column0 style59 n style61" colspan="3">6</td>
			<td class="column3 style62 s style61" colspan="8">NECK 위치</td>
			<td class="column11 style63 s style65" colspan="9">57.9(+0.1/-0)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row11">
			<td class="column0 style59 n style61" colspan="3">7</td>
			<td class="column3 style62 s style61" colspan="8">전조부 길이</td>
			<td class="column11 style63 s style65" colspan="9">12.2(+0.1/-0)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row12">
			<td class="column0 style59 n style61" colspan="3">8</td>
			<td class="column3 style62 s style61" colspan="8">선단면취</td>
			<td class="column11 style63 s style65" colspan="9">&nbsp;30˚ x 1.5</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row13">
			<td class="column0 style59 n style61" colspan="3">9</td>
			<td class="column3 style62 s style61" colspan="8">TAPER 구간</td>
			<td class="column11 style63 s style65" colspan="9">3.9(+0/-0.1)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row14">
			<td class="column0 style59 n style61" colspan="3">10</td>
			<td class="column3 style62 s style61" colspan="8">TAPER 구간2</td>
			<td class="column11 style63 s style65" colspan="9">6.5(+0/-0.15)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row15">
			<td class="column0 style59 n style61" colspan="3">11</td>
			<td class="column3 style62 s style61" colspan="8">TAPER NECK경</td>
			<td class="column11 style63 s style65" colspan="9">Ø10.7(±0.1)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row16">
			<td class="column0 style59 n style61" colspan="3">12</td>
			<td class="column3 style62 s style61" colspan="8">GROOVE 폭</td>
			<td class="column11 style63 s style65" colspan="9">1.03(+0/-0.1)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row17">
			<td class="column0 style59 n style61" colspan="3">13</td>
			<td class="column3 style62 s style61" colspan="8">GROOVE R</td>
			<td class="column11 style63 s style65" colspan="9">&nbsp;R 0.5</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row18">
			<td class="column0 style59 n style61" colspan="3">14</td>
			<td class="column3 style62 s style61" colspan="8">GROOVE 거리</td>
			<td class="column11 style63 s style65" colspan="9">5.05(+0.05/-0)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row19">
			<td class="column0 style59 n style61" colspan="3">15</td>
			<td class="column3 style62 s style61" colspan="8">GROOVE 경</td>
			<td class="column11 style63 s style65" colspan="9">Ø11.5(+0/-0.07)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row20">
			<td class="column0 style59 n style61" colspan="3">16</td>
			<td class="column3 style86 s style88" colspan="8">NECK 폭</td>
			<td class="column11 style63 s style65" colspan="9">1.1(-0/+0.14)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row21">
			<td class="column0 style59 n style61" colspan="3">17</td>
			<td class="column3 style86 s style88" colspan="8">NECK 대경</td>
			<td class="column11 style63 s style65" colspan="9">Ø10.9(+0/-0.11)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row22">
			<td class="column0 style59 n style61" colspan="3">18</td>
			<td class="column3 style86 s style88" colspan="8">NECK 소경</td>
			<td class="column11 style63 s style65" colspan="9">Ø10.7(+0/-0.11)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row23">
			<td class="column0 style59 n style61" colspan="3">19</td>
			<td class="column3 style62 s style61" colspan="8">NECK 내측 R</td>
			<td class="column11 style63 s style65" colspan="9">MAX 0.15</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row24">
			<td class="column0 style59 n style61" colspan="3">20</td>
			<td class="column3 style62 s style61" colspan="8">NECK 각</td>
			<td class="column11 style63 s style65" colspan="9">&nbsp;45˚</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row25">
			<td class="column0 style59 n style61" colspan="3">21</td>
			<td class="column3 style62 s style61" colspan="8">전 장</td>
			<td class="column11 style83 s style85" colspan="9">(104)</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style81 null style81" colspan="4"></td>
			<td class="column30 style81 null style82" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row26">
			<td class="column0 style59 n style61" colspan="3">22</td>
			<td class="column3 style62 s style61" colspan="8">면 취</td>
			<td class="column11 style63 s style65" colspan="9">45˚ x 1.1</td>
			<td class="column20 style63 s style65" colspan="6">공구현미경</td>
			<td class="column26 style66 null style66" colspan="4"></td>
			<td class="column30 style66 null style67" colspan="5"></td>
			<td class="column35 style43 null"></td>
			<td class="column36 style44 null"></td>
			<td class="column37 style45 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row27">
			<td class="column0 style2 s">※.비고</td>
			<td class="column1 style3 null"></td>
			<td class="column2 style3 null"></td>
			<td class="column3 style3 null"></td>
			<td class="column4 style3 null"></td>
			<td class="column5 style3 null"></td>
			<td class="column6 style3 null"></td>
			<td class="column7 style3 null"></td>
			<td class="column8 style3 null"></td>
			<td class="column9 style3 null"></td>
			<td class="column10 style3 null"></td>
			<td class="column11 style3 null"></td>
			<td class="column12 style3 null"></td>
			<td class="column13 style3 null"></td>
			<td class="column14 style3 null"></td>
			<td class="column15 style3 null"></td>
			<td class="column16 style3 null"></td>
			<td class="column17 style3 null"></td>
			<td class="column18 style3 null"></td>
			<td class="column19 style4 null"></td>
			<td class="column20 style69 s style70" colspan="6">종 합  판 정</td>
			<td class="column26 style70 s style70" colspan="4">작  성</td>
			<td class="column30 style70 s style70" colspan="4">검  토</td>
			<td class="column34 style70 s style71" colspan="4">승  인</td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row28">
			<td class="column0 style5 null"></td>
			<td class="column1 style6 null"></td>
			<td class="column2 style6 null"></td>
			<td class="column3 style6 null"></td>
			<td class="column4 style6 null"></td>
			<td class="column5 style6 null"></td>
			<td class="column6 style6 null"></td>
			<td class="column7 style6 null"></td>
			<td class="column8 style6 null"></td>
			<td class="column9 style6 null"></td>
			<td class="column10 style6 null"></td>
			<td class="column11 style6 null"></td>
			<td class="column12 style6 null"></td>
			<td class="column13 style6 null"></td>
			<td class="column14 style6 null"></td>
			<td class="column15 style6 null"></td>
			<td class="column16 style6 null"></td>
			<td class="column17 style6 null"></td>
			<td class="column18 style6 null"></td>
			<td class="column19 style7 null"></td>
			<td class="column20 style72 null style77" colspan="6" rowspan="3"></td>
			<td class="column26 style73 null style77" colspan="4" rowspan="3"></td>
			<td class="column30 style73 null style77" colspan="4" rowspan="3"></td>
			<td class="column34 style73 null style80" colspan="4" rowspan="3"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row29">
			<td class="column0 style5 null"></td>
			<td class="column1 style6 null"></td>
			<td class="column2 style6 null"></td>
			<td class="column3 style6 null"></td>
			<td class="column4 style6 null"></td>
			<td class="column5 style6 null"></td>
			<td class="column6 style6 null"></td>
			<td class="column7 style6 null"></td>
			<td class="column8 style6 null"></td>
			<td class="column9 style6 null"></td>
			<td class="column10 style6 null"></td>
			<td class="column11 style6 null"></td>
			<td class="column12 style6 null"></td>
			<td class="column13 style6 null"></td>
			<td class="column14 style6 null"></td>
			<td class="column15 style6 null"></td>
			<td class="column16 style6 null"></td>
			<td class="column17 style6 null"></td>
			<td class="column18 style6 null"></td>
			<td class="column19 style7 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row30">
			<td class="column0 style9 null"></td>
			<td class="column1 style10 null"></td>
			<td class="column2 style10 null"></td>
			<td class="column3 style10 null"></td>
			<td class="column4 style10 null"></td>
			<td class="column5 style10 null"></td>
			<td class="column6 style10 null"></td>
			<td class="column7 style10 null"></td>
			<td class="column8 style10 null"></td>
			<td class="column9 style10 null"></td>
			<td class="column10 style10 null"></td>
			<td class="column11 style10 null"></td>
			<td class="column12 style10 null"></td>
			<td class="column13 style10 null"></td>
			<td class="column14 style10 null"></td>
			<td class="column15 style10 null"></td>
			<td class="column16 style10 null"></td>
			<td class="column17 style10 null"></td>
			<td class="column18 style10 null"></td>
			<td class="column19 style11 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		  <tr class="row31">
			<td class="column0 style12 s">F10-02(승인일:2005.07.01)</td>
			<td class="column1 style13 null"></td>
			<td class="column2 style13 null"></td>
			<td class="column3 style13 null"></td>
			<td class="column4 style13 null"></td>
			<td class="column5 style13 null"></td>
			<td class="column6 style13 null"></td>
			<td class="column7 style13 null"></td>
			<td class="column8 style13 null"></td>
			<td class="column9 style13 null"></td>
			<td class="column10 style13 null"></td>
			<td class="column11 style13 null"></td>
			<td class="column12 style13 null"></td>
			<td class="column13 style13 null"></td>
			<td class="column14 style13 null"></td>
			<td class="column15 style13 null"></td>
			<td class="column16 style13 null"></td>
			<td class="column17 style68 s style68" colspan="8">(주)AMSCO</td>
			<td class="column25 style13 null"></td>
			<td class="column26">&nbsp;</td>
			<td class="column27 style13 null"></td>
			<td class="column28">&nbsp;</td>
			<td class="column29 style14 null"></td>
			<td class="column30 style13 null"></td>
			<td class="column31 style13 null"></td>
			<td class="column32 style13 null"></td>
			<td class="column33 style13 null"></td>
			<td class="column34 style13 null"></td>
			<td class="column35 style13 null"></td>
			<td class="column36 style13 null"></td>
			<td class="column37 style13 null"></td>
			<td class="column38">&nbsp;</td>
		  </tr>
		</tbody>
	</table>
  

</body></html>