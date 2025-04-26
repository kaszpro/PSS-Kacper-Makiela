# Generowanie diagramu sekwencji w formacie Draw.io XML dla zaimportowania
sequence_diagram_drawio_path = "/mnt/data/PMA_sequence_diagram_for_import.xml"

# Tworzenie pliku XML dla diagramu sekwencji
with open(sequence_diagram_drawio_path, "w") as f:
    f.write("""
<mxfile host="app.diagrams.net">
  <diagram name="PMA Sequence Diagram">
    <mxGraphModel dx="1000" dy="800" grid="1" gridSize="10" guides="1" tooltips="1" connect="1" arrows="1" fold="1" page="1" pageScale="1" pageWidth="800" pageHeight="600" math="0" shadow="0">
      <root>
        <mxCell id="0" />
        <mxCell id="1" parent="0" />
        <!-- Aktor: Użytkownik niezarejestrowany -->
        <mxCell id="actor1" value="Użytkownik niezarejestrowany" style="shape=umlActor;whiteSpace=wrap;html=1;" vertex="1" parent="1">
          <mxGeometry x="20" y="20" width="30" height="80" as="geometry" />
        </mxCell>
        <!-- Aktor: Użytkownik zarejestrowany -->
        <mxCell id="actor2" value="Użytkownik zarejestrowany" style="shape=umlActor;whiteSpace=wrap;html=1;" vertex="1" parent="1">
          <mxGeometry x="20" y="140" width="30" height="80" as="geometry" />
        </mxCell>
        <!-- Aktor: Administrator -->
        <mxCell id="actor3" value="Administrator" style="shape=umlActor;whiteSpace=wrap;html=1;" vertex="1" parent="1">
          <mxGeometry x="20" y="260" width="30" height="80" as="geometry" />
        </mxCell>
        <!-- Obiekt: Portal PMA -->
        <mxCell id="portal" value="Portal PMA" style="shape=rectangle;whiteSpace=wrap;html=1;" vertex="1" parent="1">
          <mxGeometry x="200" y="20" width="140" height="30" as="geometry" />
        </mxCell>
        <!-- Obiekt: Baza danych -->
        <mxCell id="db" value="Baza danych" style="shape=rectangle;whiteSpace=wrap;html=1;" vertex="1" parent="1">
          <mxGeometry x="400" y="20" width="140" height="30" as="geometry" />
        </mxCell>
        <!-- Rejestracja użytkownika -->
        <mxCell id="reg1" value="Rejestracja" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;" edge="1" parent="1" source="actor1" target="portal">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="reg2" value="Zapisz dane" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;" edge="1" parent="1" source="portal" target="db">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="reg3" value="Potwierdzenie rejestracji" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;" edge="1" parent="1" source="portal" target="actor1">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <!-- Logowanie użytkownika -->
        <mxCell id="login1" value="Logowanie" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;" edge="1" parent="1" source="actor2" target="portal">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="login2" value="Weryfikacja danych" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;" edge="1" parent="1" source="portal" target="db">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="login3" value="Potwierdzenie logowania" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;" edge="1" parent="1" source="portal" target="actor2">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <!-- Dodawanie artykułów -->
        <mxCell id="add_article1" value="Dodaj artykuł" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;" edge="1" parent="1" source="actor2" target="portal">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="add_article2" value="Zapisz artykuł" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;" edge="1" parent="1" source="portal" target="db">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="add_article3" value="Potwierdzenie publikacji" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;" edge="1" parent="1" source="portal" target="actor2">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <!-- Moderowanie komentarzy -->
        <mxCell id="mod1" value="Przeglądaj komentarze" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;" edge="1" parent="1" source="actor3" target="portal">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="mod2" value="Usuń komentarz" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;" edge="1" parent="1" source="portal" target="db">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
        <mxCell id="mod3" value="Potwierdzenie usunięcia" style="edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;" edge="1" parent="1" source="portal" target="actor3">
          <mxGeometry relative="1" as="geometry" />
        </mxCell>
      </root>
    </mxGraphModel>
  </diagram>
</mxfile>
    """)

sequence_diagram_drawio_path
