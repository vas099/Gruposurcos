<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="2.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" indent="yes"/>
	<xsl:template match="/">
	<html>
		<head>
			<title>Results</title>
		</head>
		<body>
			<h2 align="center">Overall results</h2>
          
			<table border="1" cellpadding="2" cellspacing="0" width="95%" style="border: #dcdcdc 1px solid;">
			  <tr valign="top">
				  <td>
					  <b>Test Cases</b>
				  </td>
				  <td>
					  <b>Passed</b>
				  </td>
				  <td>
					  <b>Failed</b>
				  </td>           
				  <td>
					  <b>Skipped</b>
				  </td>           
				  <td>
					  <b>Time spent</b>
				  </td>
			  </tr>
			  <tr>
				  <td>
					 <xsl:value-of select="//test-run/@total"/>
				  </td>
				  <td>
					<xsl:value-of select="//test-run/@passed"/>
				  </td>
				  <td>
					  <xsl:value-of select="//test-run/@failed"/>
				  </td>
				  <td>              
					<xsl:value-of select="//test-run/@skipped"/>              
				  </td>             
				  <td>
					 <xsl:value-of select="//test-run/@duration"/> sec
				  </td>
			  </tr>
			</table>

			<h2 align="center">Environment</h2>
			
			<table border="1" cellpadding="2" cellspacing="0" width="95%" style="border: #dcdcdc 1px solid;">
			  <tr>
				<td>
				  <b>Name</b>
				</td>
				<td>
				  <b>Version</b>
				</td>
			  </tr>
			  <tr>
				<td>
				  Nunit version
				</td>
				<td>
				  <xsl:value-of select="//environment/@framework-version"/>
				</td>
			  </tr>
			  <tr>
				<td>
				  Clr-version
				</td>
				<td>
				  <xsl:value-of select="//environment/@clr-version"/>
				</td>
			  </tr>
			  <tr>
				<td>
				  Platform
				</td>
				<td>
				  <xsl:value-of select="//environment/@platform"/>
				</td>
			  </tr>
			  <tr>
				<td>
				  Operating System
				</td>
				<td>
				  <xsl:value-of select="//environment/@os-version"/>
				</td>
			  </tr>
			</table>
    
			<h2 align="center">Result</h2>
			
			<table border="1" cellpadding="2" cellspacing="0" width="95%" style="border: #dcdcdc 1px solid;">
				<tr>
					<td width="25%">
						<center><b>Test Case</b></center>
					</td>            
					
					<td width="15%" align="left">
						<center><b>Result</b></center>
					</td>
				  
					<td width="25%" align="left">
						<center><b>Details</b></center>
					</td>  

					<td width="15%" align="left">
						<center><b>Duration</b></center>
					</td>
				</tr>

				<!-- for-each loop for set data -->
				<xsl:for-each select="//test-case">
				  <tr>
					<td>
						<xsl:value-of select=" @name "/>
					</td>
					
					<!-- if test status = 'Passed' -->
					<xsl:if test="@result='Passed'">
						<td bgcolor='#33CC00'>
							<center><xsl:value-of select=" @result "/></center>
						</td>
					</xsl:if>

					<!-- if test status = 'Failed' -->
					<xsl:if test="@result='Failed'">
						<td bgcolor='#FF3300'>
							<center><xsl:value-of select=" @result "/></center>
						</td>
					</xsl:if>
					
					<!-- if test status = 'Skipped' -->
					<xsl:if test="@result='Skipped'">
						<td bgcolor='#FF8C00'>
							<center><xsl:value-of select=" @result "/></center>
						</td>
					</xsl:if>
					<td>
						<center> <xsl:value-of select=" .//output "/> </center>
					</td>
					<td>
						<center><xsl:value-of select=" @duration*60 "/></center>
					</td>
					<td>
						<b>Message: </b> <xsl:value-of select=".//message"/><br/>
						<b>Stack Trace: </b> <xsl:value-of select=".//stack-trace"/>
					</td>
				  </tr>
				</xsl:for-each>      
			</table>

		</body>
	</html>
	</xsl:template>
</xsl:stylesheet>