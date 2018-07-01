<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="2.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" indent="yes"/>
	<xsl:template match="/">
	<html>
		<head>
			<title>Results</title>
		</head>
		<body>
			<p>Overall results</p>
			<table>
			  <tr>
				  <th>Test Cases</th><th>Passed</th><th>Failed</th><th>Skipped</th><th>Time spent</th>
			  </tr>
			  <tr>
				  <td><xsl:value-of select="//test-run/@total"/></td>
				  <td><xsl:value-of select="//test-run/@passed"/></td>
				  <td><xsl:value-of select="//test-run/@failed"/></td>
				  <td><xsl:value-of select="//test-run/@skipped"/></td>             
				  <td><xsl:value-of select="//test-run/@duration"/> sec</td>
			  </tr>
			</table>
			<p>Environment</p>
			<table>
			  <tr>
				<th>Name</th><th>Version</th>
			  </tr>
			  <tr>
				<td>Nunit version</td><td><xsl:value-of select="//environment/@framework-version"/></td>
              </tr>
			  <tr>
            	<td>Clr-version</td><td><xsl:value-of select="//environment/@clr-version"/></td>
			  </tr>
			  <tr>
				<td>Platform</td><td><xsl:value-of select="//environment/@platform"/></td>
			  </tr>
			  <tr><td>Operating System</td><td><xsl:value-of select="//environment/@os-version"/></td>
			  </tr>
			</table>
			<p>Result</p>
			<table>
				<tr>
		            <th class="new1">Test Cace</th><th class="new2">Result</th><th>Details</th><th>Duration</th><th>Messag</th>
				</tr>
				<!-- for-each loop for set data -->
				<xsl:for-each select="//test-case">
				  <tr>
					<td><xsl:value-of select=" @name "/></td>
					<!-- if test status = 'Passed' -->
					<xsl:if test="@result='Passed'">
						<td class="new3"><xsl:value-of select=" @result "/></td>
					</xsl:if>
					<!-- if test status = 'Failed' -->
					<xsl:if test="@result='Failed'">
						<td class="new4"><xsl:value-of select=" @result "/></td>
					</xsl:if>
					<!-- if test status = 'Skipped' -->
					<xsl:if test="@result='Skipped'">
						<td class="new5"><xsl:value-of select=" @result "/></td>
					</xsl:if>
					<td><xsl:value-of select=" .//output "/></td>
					<td><xsl:value-of select=" @duration*60 "/></td>
					<td><xsl:value-of select=".//message"/>Stack Trace: <xsl:value-of select=".//stack-trace"/></td>
				  </tr>
				</xsl:for-each>      
			</table>
		</body>
	</html>
	</xsl:template>
</xsl:stylesheet>