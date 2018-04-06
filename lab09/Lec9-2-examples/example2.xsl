<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" 
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <body>
        <h2>My CD Collection</h2>
        <table border="1">
          <tr bgcolor="#9acd32">
            <th style="text-align:left">Title</th>
            <th style="text-align:left">Artist</th>
          </tr>
          <xsl:for-each select="catalog/cd">
            <xsl:sort select="artist"/>
            <tr>
              <td>
                <xsl:value-of select="title"/>
              </td>
              <xsl:choose>
                <xsl:when test="price &gt; 10">
                <td bgcolor="yellow">
                  <xsl:value-of select="artist"/>
                </td>
                </xsl:when>
                <xsl:when test="(price &lt;= 10) and (price &gt; 9)">
                <td bgcolor="grey">
                  <xsl:value-of select="artist"/>
                </td>
                </xsl:when>
                <xsl:otherwise>
                <td>
                  <xsl:value-of select="artist"/>
                </td>
                </xsl:otherwise>
              </xsl:choose>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet> 