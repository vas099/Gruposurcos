<?xml version="1.0"?>
<xsl:stylesheet version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:template match="test-run/test-suite">
  <HTML>
    <HEAD>
      <TITLE>TestResult</TITLE>
    </HEAD>
    <BODY>
      <H1>Table of results</H1>
      <TABLE BORDER="2">
        <xsl:for-each select="test-run/test-suite">
          <TR bgcolor="#9acd32">
            <th>type</th><th>id</th><th>name</th><th>fullname</th><th>runstate</th><th>testcasecount</th><th>result</th><th>site</th><th>start-time</th><th>end-time</th><th>duration</th><th>total</th><th>passed</th><th>failed</th><th>warnings</th><th>inconclusive</th><th>skipped</th><th>asserts</th>
          </TR>   
        </xsl:for-each>
        <xsl:for-each select="test-run/test-suite">
          <TR>
            <td><xsl:value-of select="@type"/></td><td><xsl:value-of select="@id"/></td><td><xsl:value-of select="@name"/></td><td><xsl:value-of select="@fullname"/></td><td><xsl:value-of select="@testcasecount"/></td><td><xsl:value-of select="@results"/></td><td><xsl:value-of select="@site"/></td><td><xsl:value-of select="@start-time"/></td><td><xsl:value-of select="@end-time"/></td><td><xsl:value-of select="@duration"/></td><td><xsl:value-of select="@total"/></td><td><xsl:value-of select="@passed"/></td><td><xsl:value-of select="@failed"/></td><td><xsl:value-of select="@warnings"/></td><td><xsl:value-of select="@inconclusive"/></td><td><xsl:value-of select="vskipped"/></td><td><xsl:value-of select="@asserts"/></td>
          </TR>
        </xsl:for-each>
        <xsl:for-each select="test-run/test-case">
          <TR bdcolor="ff0000">
            <td><xsl:value-of select="@type"/></td><td><xsl:value-of select="@id"/></td><td><xsl:value-of select="@name"/></td><td><xsl:value-of select="@fullname"/></td><td><xsl:value-of select="t@estcasecount"/></td><td><xsl:value-of select="@results"/></td><td><xsl:value-of select="@site"/></td><td><xsl:value-of select="@start-time"/></td><td><xsl:value-of select="@end-time"/></td><td><xsl:value-of select="@duration"/></td><td><xsl:value-of select="@total"/></td><td><xsl:value-of select="@passed"/></td><td><xsl:value-of select="@failed"/></td><td><xsl:value-of select="@warnings"/></td><td><xsl:value-of select="@inconclusive"/></td><td><xsl:value-of select="@skipped"/></td><td><xsl:value-of select="@asserts"/></td>
          </TR>
        </xsl:for-each>
      </TABLE>
    </BODY>
    </HTML>
  </xsl:template>
</xsl:stylesheet>