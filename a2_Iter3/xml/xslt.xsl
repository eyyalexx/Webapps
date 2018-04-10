<?xml version="1.0"?>
<xsl:stylesheet version="1.0" 
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/db">
        <html>
            <body>
                <h2>Artists</h2>
                <table border="1">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Birth</th>
                        <th>Death</th>
                        <th>Living</th>
                        <th>Genres</th>
                        <th>Famous</th>
                    </tr>
                    <xsl:for-each select="Artists/Artist">
                        <tr>
                            <td>
                                <xsl:value-of select="Name"/>
                            </td>
                            <td>
                                <xsl:value-of select="Description"/>
                            </td>
                            <td>
                                <xsl:value-of select="Birth"/>
                            </td>
                            <td>
                                <xsl:value-of select="Death"/>
                            </td>
                            <td>
                                <xsl:value-of select="Living"/>
                            </td>
                            <td>
                                <xsl:value-of select="Genres"/>
                            </td>
                            <td>
                                <xsl:value-of select="Famous"/>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
                <br />
                <br />
                <h2>Artworks</h2>
                <table border="1">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Dimensions</th>
                        <th>Location</th>
                        <th>Artist</th>
                        <th>Price</th>
                        <th>Genre</th>
                        <th>Date Created</th>
                    </tr>
                    <xsl:for-each select="ArtWorks/ArtWork">
                        <tr>
                            <td>
                                <xsl:value-of select="Name"/>
                            </td>
                            <td>
                                <xsl:value-of select="Description"/>
                            </td>
                            <td>
                                <xsl:value-of select="Type"/>
                            </td>
                            <td>
                                <xsl:value-of select="Dimensions"/>
                            </td>
                            <td>
                                <xsl:value-of select="Location"/>
                            </td>
                            <td>
                                <xsl:value-of select="Artist"/>
                            </td>
                            <td>
                                <xsl:value-of select="Price"/>
                            </td>
                            <td>
                                <xsl:value-of select="Genre"/>
                            </td>
                            <td>
                                <xsl:value-of select="DateCreated"/>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
                <br />
                <br />
                <h2>Museums</h2>
                <table border="1">
                    <tr>
                        <th>Name</th>
                        <th>Established</th>
                        <th>Location</th>
                        <th>People</th>
                        <th>History</th>
                        <th>ArtWorks</th>
                        <th>Description</th>
                    </tr>
                    <xsl:for-each select="Museums/Museum">
                        <tr>
                            <td>
                                <xsl:value-of select="Name"/>
                            </td>
                            <td>
                                <xsl:value-of select="Established"/>
                            </td>
                            <td>
                                <xsl:value-of select="Location"/>
                            </td>
                            <td>
                                <xsl:value-of select="People"/>
                            </td>
                            <td>
                                <xsl:value-of select="History"/>
                            </td>
                            <td>
                                <xsl:value-of select="ArtWorks"/>
                            </td>
                            <td>
                                <xsl:value-of select="Description"/>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>