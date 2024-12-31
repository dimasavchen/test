<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savchenko Dmytro 1mld</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #629584;
            color: black;
            margin: 0;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
        }
        .grid-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .grid-item {
            flex: 1;
            height: 100px;
            background-color: #1A4D2E;
            border: 1px solid #000;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .grid-item:hover {
            background-color: #4F6F52;
        }
        .content {
            display: none;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #000;
            margin-top: 10px;
        }
        .content.active {
            display: block;

        }
        
        /* Додаємо стиль для зеленої підкладки тільки для вмісту клітинки 2 */
        #content-2 {
            background-color: #d4f4d2; /* Світло-зелений фон */
        }
        .algorithm-button {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
            font-size: 18px;
        }
    </style>
    
</head>
<body>
    <h2>Domáce úlohy</h2>

    <div class="grid-container">
        <div class="grid-item" onclick="showContent(1)"> Úloha 1</div>
        <div class="grid-item" onclick="showContent(2)"> Úloha 2</div>
        <div class="grid-item" onclick="showContent(3)"> Úloha 3</div>
        <div class="grid-item" onclick="showContent(4)"> Úloha 4</div>
        <div class="grid-item" onclick="showContent(5)"> Úloha 5</div>
    </div>

    <div id="content-1" class="content">
       
        <div>
            <button onclick="myFunction1()">Algoritmus kvadrat</button>
            <div id="myDIV1" style="display: none;">
              <div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;xml&quot;:&quot;&lt;mxfile host=\&quot;app.diagrams.net\&quot; agent=\&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:132.0) Gecko/20100101 Firefox/132.0\&quot; version=\&quot;24.8.3\&quot;&gt;&lt;diagram name=\&quot;Страница — 1\&quot; id=\&quot;7XdT2jAB89VJ3kXVEoBQ\&quot;&gt;&lt;mxGraphModel dx=\&quot;1980\&quot; dy=\&quot;748\&quot; grid=\&quot;1\&quot; gridSize=\&quot;10\&quot; guides=\&quot;1\&quot; tooltips=\&quot;1\&quot; connect=\&quot;1\&quot; arrows=\&quot;1\&quot; fold=\&quot;1\&quot; page=\&quot;1\&quot; pageScale=\&quot;1\&quot; pageWidth=\&quot;827\&quot; pageHeight=\&quot;1169\&quot; math=\&quot;0\&quot; shadow=\&quot;0\&quot;&gt;&lt;root&gt;&lt;mxCell id=\&quot;0\&quot;/&gt;&lt;mxCell id=\&quot;1\&quot; parent=\&quot;0\&quot;/&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-1\&quot; value=\&quot;Start\&quot; style=\&quot;strokeWidth=2;html=1;shape=mxgraph.flowchart.terminator;whiteSpace=wrap;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;170\&quot; y=\&quot;140\&quot; width=\&quot;100\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-2\&quot; value=\&quot;Vstup a, b, c\&quot; style=\&quot;shape=parallelogram;html=1;strokeWidth=2;perimeter=parallelogramPerimeter;whiteSpace=wrap;rounded=1;arcSize=12;size=0.23;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;170\&quot; y=\&quot;240\&quot; width=\&quot;100\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-3\&quot; value=\&quot;D = b*b – (4*a*c)\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;160\&quot; y=\&quot;340\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-4\&quot; value=\&quot;D: 0\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;160\&quot; y=\&quot;440\&quot; width=\&quot;120\&quot; height=\&quot;90\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-5\&quot; value=\&quot;x1 = (-b + i*√|D|)/2a&amp;lt;br&amp;gt;x2 = (-b – i*√|D|)/2a\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;310\&quot; y=\&quot;455\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-6\&quot; value=\&quot;x1 = (-b + √D)/2a&amp;lt;br&amp;gt;x2 = (-b - √D)/2a\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;10\&quot; y=\&quot;455\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-7\&quot; value=\&quot;x = -b/2a\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;160\&quot; y=\&quot;570\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-9\&quot; value=\&quot;Vystup x1, x2\&quot; style=\&quot;shape=parallelogram;html=1;strokeWidth=2;perimeter=parallelogramPerimeter;whiteSpace=wrap;rounded=1;arcSize=12;size=0.23;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;330\&quot; y=\&quot;670\&quot; width=\&quot;100\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-10\&quot; value=\&quot;Vystup x\&quot; style=\&quot;shape=parallelogram;html=1;strokeWidth=2;perimeter=parallelogramPerimeter;whiteSpace=wrap;rounded=1;arcSize=12;size=0.23;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;170\&quot; y=\&quot;670\&quot; width=\&quot;100\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-11\&quot; value=\&quot;Vystup x1, x2\&quot; style=\&quot;shape=parallelogram;html=1;strokeWidth=2;perimeter=parallelogramPerimeter;whiteSpace=wrap;rounded=1;arcSize=12;size=0.23;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;-10\&quot; y=\&quot;670\&quot; width=\&quot;100\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-12\&quot; value=\&quot;Stop\&quot; style=\&quot;strokeWidth=2;html=1;shape=mxgraph.flowchart.terminator;whiteSpace=wrap;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;170\&quot; y=\&quot;810\&quot; width=\&quot;100\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-13\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;exitPerimeter=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;h2O0lasmm7BvyRWSCFo3-1\&quot; target=\&quot;h2O0lasmm7BvyRWSCFo3-2\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;200\&quot; y=\&quot;530\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;250\&quot; y=\&quot;480\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-14\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;h2O0lasmm7BvyRWSCFo3-2\&quot; target=\&quot;h2O0lasmm7BvyRWSCFo3-3\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;200\&quot; y=\&quot;530\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;250\&quot; y=\&quot;480\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-15\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;h2O0lasmm7BvyRWSCFo3-4\&quot; target=\&quot;h2O0lasmm7BvyRWSCFo3-3\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;190\&quot; y=\&quot;570\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;240\&quot; y=\&quot;520\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-16\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;h2O0lasmm7BvyRWSCFo3-7\&quot; target=\&quot;h2O0lasmm7BvyRWSCFo3-4\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;190\&quot; y=\&quot;570\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;240\&quot; y=\&quot;520\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-17\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;h2O0lasmm7BvyRWSCFo3-7\&quot; target=\&quot;h2O0lasmm7BvyRWSCFo3-10\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;190\&quot; y=\&quot;740\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;240\&quot; y=\&quot;690\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-19\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;entryPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;h2O0lasmm7BvyRWSCFo3-10\&quot; target=\&quot;h2O0lasmm7BvyRWSCFo3-12\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;190\&quot; y=\&quot;740\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;220\&quot; y=\&quot;780\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-20\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=1;exitY=0.5;exitDx=0;exitDy=0;entryX=0;entryY=0.5;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;h2O0lasmm7BvyRWSCFo3-6\&quot; target=\&quot;h2O0lasmm7BvyRWSCFo3-4\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;130\&quot; y=\&quot;550\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;180\&quot; y=\&quot;500\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-22\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.25;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;h2O0lasmm7BvyRWSCFo3-6\&quot; target=\&quot;h2O0lasmm7BvyRWSCFo3-11\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;120\&quot; y=\&quot;560\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;170\&quot; y=\&quot;510\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-23\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;h2O0lasmm7BvyRWSCFo3-11\&quot; target=\&quot;h2O0lasmm7BvyRWSCFo3-9\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;60\&quot; y=\&quot;600\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;110\&quot; y=\&quot;550\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;40\&quot; y=\&quot;770\&quot;/&gt;&lt;mxPoint x=\&quot;380\&quot; y=\&quot;770\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-24\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;entryX=0.597;entryY=1;entryDx=0;entryDy=0;entryPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;h2O0lasmm7BvyRWSCFo3-9\&quot; target=\&quot;h2O0lasmm7BvyRWSCFo3-5\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;330\&quot; y=\&quot;660\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;380\&quot; y=\&quot;610\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-25\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0;entryY=0.5;entryDx=0;entryDy=0;exitX=1;exitY=0.5;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;h2O0lasmm7BvyRWSCFo3-4\&quot; target=\&quot;h2O0lasmm7BvyRWSCFo3-5\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;320\&quot; y=\&quot;670\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;370\&quot; y=\&quot;620\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-26\&quot; value=\&quot;=\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;220\&quot; y=\&quot;540\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-27\&quot; value=\&quot;&amp;gt;\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;120\&quot; y=\&quot;455\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;h2O0lasmm7BvyRWSCFo3-28\&quot; value=\&quot;&amp;lt;\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;270\&quot; y=\&quot;455\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;/root&gt;&lt;/mxGraphModel&gt;&lt;/diagram&gt;&lt;/mxfile&gt;&quot;,&quot;toolbar&quot;:&quot;pages zoom layers lightbox&quot;,&quot;page&quot;:0}"></div>
<script type="text/javascript" src="https://app.diagrams.net/js/viewer-static.min.js"></script>
            </div>
          </div>
        
          <div>
            <button onclick="myFunction2()">Algoritmus maxmin</button>
            <div id="myDIV2" style="display: none;">
              <div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;xml&quot;:&quot;&lt;mxfile host=\&quot;app.diagrams.net\&quot; agent=\&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:131.0) Gecko/20100101 Firefox/131.0\&quot; version=\&quot;24.8.2\&quot;&gt;&lt;diagram name=\&quot;Страница — 1\&quot; id=\&quot;BDIYLdpPiWUqYxymddZi\&quot;&gt;&lt;mxGraphModel dx=\&quot;995\&quot; dy=\&quot;1211\&quot; grid=\&quot;1\&quot; gridSize=\&quot;10\&quot; guides=\&quot;1\&quot; tooltips=\&quot;1\&quot; connect=\&quot;1\&quot; arrows=\&quot;1\&quot; fold=\&quot;1\&quot; page=\&quot;1\&quot; pageScale=\&quot;1\&quot; pageWidth=\&quot;827\&quot; pageHeight=\&quot;1169\&quot; math=\&quot;0\&quot; shadow=\&quot;0\&quot;&gt;&lt;root&gt;&lt;mxCell id=\&quot;0\&quot;/&gt;&lt;mxCell id=\&quot;1\&quot; parent=\&quot;0\&quot;/&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-1\&quot; value=\&quot;&amp;lt;b&amp;gt;1&amp;lt;/b&amp;gt;\&quot; style=\&quot;ellipse;whiteSpace=wrap;html=1;aspect=fixed;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;389\&quot; y=\&quot;90\&quot; width=\&quot;50\&quot; height=\&quot;50\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-2\&quot; value=\&quot;&amp;lt;div&amp;gt;&amp;lt;b&amp;gt;min = A&amp;lt;/b&amp;gt;&amp;lt;font style=&amp;quot;font-size: 8px;&amp;quot;&amp;gt;1,1&amp;lt;/font&amp;gt;&amp;lt;font size=&amp;quot;1&amp;quot;&amp;gt;,&amp;lt;/font&amp;gt;&amp;lt;/div&amp;gt;&amp;lt;div&amp;gt;&amp;lt;b&amp;gt;max = A&amp;lt;/b&amp;gt;&amp;lt;font style=&amp;quot;font-size: 8px;&amp;quot;&amp;gt;1,1&amp;lt;/font&amp;gt;&amp;lt;/div&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;354\&quot; y=\&quot;200\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-3\&quot; value=\&quot;&amp;lt;b&amp;gt;I =1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;354\&quot; y=\&quot;310\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-4\&quot; value=\&quot;&amp;lt;b&amp;gt;J =1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;354\&quot; y=\&quot;420\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-8\&quot; value=\&quot;&amp;lt;b&amp;gt;J = J + 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;140\&quot; y=\&quot;728.9\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-9\&quot; value=\&quot;&amp;lt;b&amp;gt;I = I + 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;50\&quot; y=\&quot;860\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-10\&quot; value=\&quot;&amp;lt;b&amp;gt;Vystup min&amp;lt;br&amp;gt;&amp;lt;/b&amp;gt;\&quot; style=\&quot;shape=parallelogram;perimeter=parallelogramPerimeter;whiteSpace=wrap;html=1;fixedSize=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;354.71\&quot; y=\&quot;1010\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-11\&quot; value=\&quot;&amp;lt;b&amp;gt;&amp;amp;nbsp;Vystup max&amp;lt;/b&amp;gt;\&quot; style=\&quot;shape=parallelogram;perimeter=parallelogramPerimeter;whiteSpace=wrap;html=1;fixedSize=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;349.71\&quot; y=\&quot;1120\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-12\&quot; value=\&quot;&amp;lt;b&amp;gt;2&amp;lt;/b&amp;gt;\&quot; style=\&quot;ellipse;whiteSpace=wrap;html=1;aspect=fixed;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;389.71\&quot; y=\&quot;1230\&quot; width=\&quot;50\&quot; height=\&quot;50\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-15\&quot; value=\&quot;&amp;lt;b&amp;gt;min = &amp;lt;/b&amp;gt;&amp;lt;b style=&amp;quot;font-size: 13px;&amp;quot;&amp;gt;A&amp;lt;/b&amp;gt;&amp;lt;font size=&amp;quot;1&amp;quot;&amp;gt;&amp;lt;b&amp;gt;&amp;lt;font style=&amp;quot;font-size: 8px;&amp;quot;&amp;gt;I,J&amp;lt;/font&amp;gt;&amp;lt;/b&amp;gt;&amp;lt;/font&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;760\&quot; y=\&quot;470\&quot; width=\&quot;140\&quot; height=\&quot;46.11\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-16\&quot; value=\&quot;&amp;lt;b style=&amp;quot;font-size: 13px;&amp;quot;&amp;gt;max = A&amp;lt;/b&amp;gt;&amp;lt;font size=&amp;quot;1&amp;quot;&amp;gt;&amp;lt;b&amp;gt;&amp;lt;font style=&amp;quot;font-size: 8px;&amp;quot;&amp;gt;I,J&amp;lt;/font&amp;gt;&amp;lt;/b&amp;gt;&amp;lt;/font&amp;gt;&amp;lt;font style=&amp;quot;font-size: 12px;&amp;quot;&amp;gt;&amp;lt;b&amp;gt;&amp;lt;font style=&amp;quot;font-size: 12px;&amp;quot;&amp;gt; &amp;lt;/font&amp;gt;&amp;lt;/b&amp;gt;&amp;lt;font style=&amp;quot;font-size: 12px;&amp;quot;&amp;gt;&amp;lt;b&amp;gt;&amp;lt;br&amp;gt;&amp;lt;/b&amp;gt;&amp;lt;/font&amp;gt;&amp;lt;/font&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;760\&quot; y=\&quot;619\&quot; width=\&quot;140\&quot; height=\&quot;46.11\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-17\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-2\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-1\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;540\&quot; y=\&quot;660\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;590\&quot; y=\&quot;610\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-20\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-2\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-3\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;390\&quot; y=\&quot;220\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;440\&quot; y=\&quot;170\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-22\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-4\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;390\&quot; y=\&quot;400\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;414\&quot; y=\&quot;370\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-24\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.497;entryY=0.964;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;entryPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-31\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-30\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;415.0000000000001\&quot; y=\&quot;740\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;414.70500000000004\&quot; y=\&quot;628.79\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-25\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.503;exitY=-0.017;exitDx=0;exitDy=0;entryX=0.498;entryY=0.969;entryDx=0;entryDy=0;entryPerimeter=0;exitPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-32\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-31\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;414.56000000000006\&quot; y=\&quot;866.1\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;414.85000000000014\&quot; y=\&quot;813.9\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-29\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-30\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-4\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;414\&quot; y=\&quot;540\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;390\&quot; y=\&quot;580\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-30\&quot; value=\&quot;&amp;lt;b&amp;gt;I = J&amp;lt;/b&amp;gt;\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;351.71\&quot; y=\&quot;540\&quot; width=\&quot;126\&quot; height=\&quot;80\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-31\&quot; value=\&quot;&amp;lt;b&amp;gt;J &amp;amp;lt; n&amp;lt;br&amp;gt;&amp;lt;/b&amp;gt;\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;351.71\&quot; y=\&quot;733.9\&quot; width=\&quot;126\&quot; height=\&quot;80\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-32\&quot; value=\&quot;&amp;lt;b&amp;gt;I &amp;amp;lt; m&amp;lt;br&amp;gt;&amp;lt;/b&amp;gt;\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;351.71\&quot; y=\&quot;860\&quot; width=\&quot;126\&quot; height=\&quot;80\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-33\&quot; value=\&quot;&amp;lt;b style=&amp;quot;font-size: 13px;&amp;quot;&amp;gt;A&amp;lt;/b&amp;gt;&amp;lt;font size=&amp;quot;1&amp;quot;&amp;gt;&amp;lt;b&amp;gt;&amp;lt;font style=&amp;quot;font-size: 8px;&amp;quot;&amp;gt;I,J&amp;lt;/font&amp;gt;&amp;lt;/b&amp;gt;&amp;lt;/font&amp;gt;&amp;lt;font style=&amp;quot;font-size: 12px;&amp;quot;&amp;gt;&amp;lt;b&amp;gt;&amp;lt;font style=&amp;quot;font-size: 12px;&amp;quot;&amp;gt; &amp;lt;/font&amp;gt;&amp;lt;font&amp;gt;&amp;amp;lt; &amp;lt;/font&amp;gt;&amp;lt;/b&amp;gt;&amp;lt;font style=&amp;quot;font-size: 12px;&amp;quot;&amp;gt;&amp;lt;b&amp;gt;min&amp;lt;br&amp;gt;&amp;lt;/b&amp;gt;&amp;lt;/font&amp;gt;&amp;lt;/font&amp;gt;\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;560\&quot; y=\&quot;460\&quot; width=\&quot;126\&quot; height=\&quot;80\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-34\&quot; value=\&quot;&amp;lt;b style=&amp;quot;font-size: 13px;&amp;quot;&amp;gt;A&amp;lt;/b&amp;gt;&amp;lt;font size=&amp;quot;1&amp;quot;&amp;gt;&amp;lt;b&amp;gt;&amp;lt;font style=&amp;quot;font-size: 8px;&amp;quot;&amp;gt;I,J&amp;lt;/font&amp;gt;&amp;lt;/b&amp;gt;&amp;lt;/font&amp;gt;&amp;lt;font style=&amp;quot;font-size: 12px;&amp;quot;&amp;gt;&amp;lt;b&amp;gt;&amp;lt;font style=&amp;quot;font-size: 12px;&amp;quot;&amp;gt; &amp;lt;/font&amp;gt;&amp;lt;font&amp;gt;&amp;amp;gt; &amp;lt;/font&amp;gt;&amp;lt;/b&amp;gt;&amp;lt;font style=&amp;quot;font-size: 12px;&amp;quot;&amp;gt;&amp;lt;b&amp;gt;max&amp;lt;br&amp;gt;&amp;lt;/b&amp;gt;&amp;lt;/font&amp;gt;&amp;lt;/font&amp;gt;\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;560\&quot; y=\&quot;603.9\&quot; width=\&quot;126\&quot; height=\&quot;80\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-36\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0;entryY=0.5;entryDx=0;entryDy=0;exitX=1;exitY=0.75;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-8\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-31\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;250\&quot; y=\&quot;830\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;300\&quot; y=\&quot;780\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-37\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0;entryY=0.5;entryDx=0;entryDy=0;exitX=1.026;exitY=0.658;exitDx=0;exitDy=0;exitPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-9\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-32\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;190\&quot; y=\&quot;930\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;240\&quot; y=\&quot;880\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-38\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-10\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-32\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;350\&quot; y=\&quot;1020\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;400\&quot; y=\&quot;970\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-40\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.546;exitY=-0.001;exitDx=0;exitDy=0;exitPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-11\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-10\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;390\&quot; y=\&quot;1180\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;440\&quot; y=\&quot;1130\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-42\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.543;entryY=1.031;entryDx=0;entryDy=0;entryPerimeter=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-12\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-11\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;414\&quot; y=\&quot;1230\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;1110\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-45\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-8\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;270\&quot; y=\&quot;730\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;410\&quot; y=\&quot;520\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;200\&quot; y=\&quot;520\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-46\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-9\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;280\&quot; y=\&quot;770\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;410\&quot; y=\&quot;400\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;110\&quot; y=\&quot;400\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-47\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-34\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;570\&quot; y=\&quot;750\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;700\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;623\&quot; y=\&quot;700\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-50\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=1;exitY=0.5;exitDx=0;exitDy=0;entryX=-0.017;entryY=0.542;entryDx=0;entryDy=0;entryPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-34\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-16\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;640\&quot; y=\&quot;660\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;750\&quot; y=\&quot;644\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-52\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=1;exitY=0.5;exitDx=0;exitDy=0;entryX=0.004;entryY=0.659;entryDx=0;entryDy=0;entryPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-33\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-15\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;650\&quot; y=\&quot;610\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;700\&quot; y=\&quot;560\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-54\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-16\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;830\&quot; y=\&quot;670\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;720\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;830\&quot; y=\&quot;720\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-58\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=1;exitY=0.5;exitDx=0;exitDy=0;entryX=0;entryY=0.5;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-30\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-33\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;550\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;560\&quot; y=\&quot;520\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;560\&quot; y=\&quot;580\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-59\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-33\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-34\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;680\&quot; y=\&quot;590\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;730\&quot; y=\&quot;540\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-60\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.47;exitY=1.013;exitDx=0;exitDy=0;exitPerimeter=0;entryX=0;entryY=1;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;zEaIsKHSKjFzrUrK4mI0-15\&quot; target=\&quot;zEaIsKHSKjFzrUrK4mI0-70\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;680\&quot; y=\&quot;590\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;630\&quot; y=\&quot;570\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;826\&quot; y=\&quot;570\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-61\&quot; value=\&quot;+\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;294.71\&quot; y=\&quot;870\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-62\&quot; value=\&quot;+\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;294.71\&quot; y=\&quot;743.9\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-63\&quot; value=\&quot;-\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;413\&quot; y=\&quot;950\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-64\&quot; value=\&quot;-\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;409.71\&quot; y=\&quot;813.9\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-65\&quot; value=\&quot;-\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;610\&quot; y=\&quot;670\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-67\&quot; value=\&quot;-\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;340\&quot; y=\&quot;600\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-68\&quot; value=\&quot;+\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;474.71\&quot; y=\&quot;555\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-69\&quot; value=\&quot;+\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;686\&quot; y=\&quot;619\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-70\&quot; value=\&quot;-\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;626\&quot; y=\&quot;540\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;zEaIsKHSKjFzrUrK4mI0-72\&quot; value=\&quot;+\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;686\&quot; y=\&quot;470\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;/root&gt;&lt;/mxGraphModel&gt;&lt;/diagram&gt;&lt;/mxfile&gt;&quot;,&quot;toolbar&quot;:&quot;pages zoom layers lightbox&quot;,&quot;page&quot;:0}"></div>
<script type="text/javascript" src="https://app.diagrams.net/js/viewer-static.min.js"></script>
            </div>
          </div>
        
          <div>
            <button onclick="myFunction3()">Algoritm 3х3</button>
            <div id="myDIV3" style="display: none;">
              <div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;xml&quot;:&quot;&lt;mxfile host=\&quot;app.diagrams.net\&quot; agent=\&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:131.0) Gecko/20100101 Firefox/131.0\&quot; version=\&quot;24.8.1\&quot;&gt;&lt;diagram name=\&quot;Страница — 1\&quot; id=\&quot;2tmpC7mBmmvR05RPfYPg\&quot;&gt;&lt;mxGraphModel dx=\&quot;3269\&quot; dy=\&quot;1522\&quot; grid=\&quot;1\&quot; gridSize=\&quot;10\&quot; guides=\&quot;1\&quot; tooltips=\&quot;1\&quot; connect=\&quot;1\&quot; arrows=\&quot;1\&quot; fold=\&quot;1\&quot; page=\&quot;1\&quot; pageScale=\&quot;1\&quot; pageWidth=\&quot;827\&quot; pageHeight=\&quot;1169\&quot; math=\&quot;0\&quot; shadow=\&quot;0\&quot;&gt;&lt;root&gt;&lt;mxCell id=\&quot;0\&quot;/&gt;&lt;mxCell id=\&quot;1\&quot; parent=\&quot;0\&quot;/&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-2\&quot; value=\&quot;Start\&quot; style=\&quot;strokeWidth=2;html=1;shape=mxgraph.flowchart.terminator;whiteSpace=wrap;fontSize=17;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;155\&quot; y=\&quot;40\&quot; width=\&quot;210\&quot; height=\&quot;108\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-3\&quot; value=\&quot;Vstup n\&quot; style=\&quot;shape=parallelogram;html=1;strokeWidth=2;perimeter=parallelogramPerimeter;whiteSpace=wrap;rounded=1;arcSize=12;size=0.23;fontSize=17;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;150\&quot; y=\&quot;210\&quot; width=\&quot;220\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-4\&quot; value=\&quot;I = 1\&quot; style=\&quot;rounded=1;whiteSpace=wrap;html=1;absoluteArcSize=1;arcSize=14;strokeWidth=2;fontSize=17;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;150\&quot; y=\&quot;340\&quot; width=\&quot;220\&quot; height=\&quot;100\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-8\&quot; value=\&quot;Vstup A&amp;lt;font style=&amp;quot;font-size: 17px;&amp;quot;&amp;gt;I,J&amp;lt;/font&amp;gt;\&quot; style=\&quot;shape=parallelogram;html=1;strokeWidth=2;perimeter=parallelogramPerimeter;whiteSpace=wrap;rounded=1;arcSize=12;size=0.23;fontSize=17;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;150\&quot; y=\&quot;650\&quot; width=\&quot;220\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-9\&quot; value=\&quot;J &amp;amp;lt; n\&quot; style=\&quot;strokeWidth=2;html=1;shape=mxgraph.flowchart.decision;whiteSpace=wrap;fontSize=17;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;188.5\&quot; y=\&quot;770\&quot; width=\&quot;143\&quot; height=\&quot;130\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-10\&quot; value=\&quot;I &amp;amp;lt; 3\&quot; style=\&quot;strokeWidth=2;html=1;shape=mxgraph.flowchart.decision;whiteSpace=wrap;fontSize=17;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;188.5\&quot; y=\&quot;950\&quot; width=\&quot;143\&quot; height=\&quot;130\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-13\&quot; value=\&quot;&amp;lt;font style=&amp;quot;font-size: 17px;&amp;quot;&amp;gt;J = J +1&amp;lt;/font&amp;gt;\&quot; style=\&quot;rounded=1;whiteSpace=wrap;html=1;absoluteArcSize=1;arcSize=14;strokeWidth=2;fontSize=17;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;-110\&quot; y=\&quot;785\&quot; width=\&quot;220\&quot; height=\&quot;100\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-14\&quot; value=\&quot;I = I&amp;amp;nbsp; + 1\&quot; style=\&quot;rounded=1;whiteSpace=wrap;html=1;absoluteArcSize=1;arcSize=14;strokeWidth=2;fontSize=17;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;-340\&quot; y=\&quot;965\&quot; width=\&quot;220\&quot; height=\&quot;100\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-32\&quot; value=\&quot;&amp;lt;font style=&amp;quot;font-size: 17px;&amp;quot;&amp;gt;1&amp;lt;/font&amp;gt;\&quot; style=\&quot;ellipse;whiteSpace=wrap;html=1;aspect=fixed;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;220\&quot; y=\&quot;1130\&quot; width=\&quot;80\&quot; height=\&quot;80\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-5\&quot; value=\&quot;j = 1\&quot; style=\&quot;rounded=1;whiteSpace=wrap;html=1;absoluteArcSize=1;arcSize=14;strokeWidth=2;fontSize=17;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;150\&quot; y=\&quot;485\&quot; width=\&quot;220\&quot; height=\&quot;100\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-44\&quot; value=\&quot;+\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;133.5\&quot; y=\&quot;970\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-45\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;GdJyZf-acToy5IrWsLOr-13\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;90\&quot; y=\&quot;800\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;260\&quot; y=\&quot;620\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint y=\&quot;620\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-54\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0;entryY=0.5;entryDx=0;entryDy=0;entryPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;GdJyZf-acToy5IrWsLOr-14\&quot; target=\&quot;GdJyZf-acToy5IrWsLOr-10\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;90\&quot; y=\&quot;800\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;140\&quot; y=\&quot;750\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-57\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;entryPerimeter=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;GdJyZf-acToy5IrWsLOr-3\&quot; target=\&quot;GdJyZf-acToy5IrWsLOr-2\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;780\&quot; y=\&quot;850\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;830\&quot; y=\&quot;800\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-59\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;GdJyZf-acToy5IrWsLOr-4\&quot; target=\&quot;GdJyZf-acToy5IrWsLOr-3\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;780\&quot; y=\&quot;850\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;830\&quot; y=\&quot;800\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-60\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;GdJyZf-acToy5IrWsLOr-5\&quot; target=\&quot;GdJyZf-acToy5IrWsLOr-4\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;780\&quot; y=\&quot;850\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;830\&quot; y=\&quot;800\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-61\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;GdJyZf-acToy5IrWsLOr-8\&quot; target=\&quot;GdJyZf-acToy5IrWsLOr-5\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;780\&quot; y=\&quot;850\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;830\&quot; y=\&quot;800\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-62\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;exitPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;GdJyZf-acToy5IrWsLOr-9\&quot; target=\&quot;GdJyZf-acToy5IrWsLOr-8\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;780\&quot; y=\&quot;850\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;830\&quot; y=\&quot;800\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-64\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;entryPerimeter=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;exitPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;GdJyZf-acToy5IrWsLOr-10\&quot; target=\&quot;GdJyZf-acToy5IrWsLOr-9\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;780\&quot; y=\&quot;850\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;830\&quot; y=\&quot;800\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-65\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;entryPerimeter=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;GdJyZf-acToy5IrWsLOr-32\&quot; target=\&quot;GdJyZf-acToy5IrWsLOr-10\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;670\&quot; y=\&quot;860\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;720\&quot; y=\&quot;810\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-66\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;GdJyZf-acToy5IrWsLOr-14\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;670\&quot; y=\&quot;860\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;260\&quot; y=\&quot;470\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;-230\&quot; y=\&quot;470\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-67\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=1;exitY=0.5;exitDx=0;exitDy=0;entryX=0;entryY=0.5;entryDx=0;entryDy=0;entryPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;GdJyZf-acToy5IrWsLOr-13\&quot; target=\&quot;GdJyZf-acToy5IrWsLOr-9\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;450\&quot; y=\&quot;860\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;500\&quot; y=\&quot;810\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-68\&quot; value=\&quot;+\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;133.5\&quot; y=\&quot;790\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-69\&quot; value=\&quot;-\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;280\&quot; y=\&quot;1110\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;GdJyZf-acToy5IrWsLOr-70\&quot; value=\&quot;-\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;280\&quot; y=\&quot;910\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;/root&gt;&lt;/mxGraphModel&gt;&lt;/diagram&gt;&lt;/mxfile&gt;&quot;,&quot;toolbar&quot;:&quot;pages zoom layers lightbox&quot;,&quot;page&quot;:0}"></div>
             <script type="text/javascript" src="https://app.diagrams.net/js/viewer-static.min.js"></script>
            </div>
          </div>

               
          <div>
            <button onclick="myFunction4()">Algoritm mxn</button>
            <div id="myDIV4" style="display: none;">
<div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;xml&quot;:&quot;&lt;mxfile host=\&quot;app.diagrams.net\&quot; agent=\&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:131.0) Gecko/20100101 Firefox/131.0\&quot; version=\&quot;24.8.2\&quot;&gt;&lt;diagram name=\&quot;Страница — 1\&quot; id=\&quot;m9rjj9P0704MazSxYwaz\&quot;&gt;&lt;mxGraphModel dx=\&quot;1765\&quot; dy=\&quot;1324\&quot; grid=\&quot;1\&quot; gridSize=\&quot;10\&quot; guides=\&quot;1\&quot; tooltips=\&quot;1\&quot; connect=\&quot;1\&quot; arrows=\&quot;1\&quot; fold=\&quot;1\&quot; page=\&quot;1\&quot; pageScale=\&quot;1\&quot; pageWidth=\&quot;827\&quot; pageHeight=\&quot;1169\&quot; math=\&quot;0\&quot; shadow=\&quot;0\&quot;&gt;&lt;root&gt;&lt;mxCell id=\&quot;0\&quot;/&gt;&lt;mxCell id=\&quot;1\&quot; parent=\&quot;0\&quot;/&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-1\&quot; value=\&quot;&amp;lt;b&amp;gt;1&amp;lt;/b&amp;gt;\&quot; style=\&quot;ellipse;whiteSpace=wrap;html=1;aspect=fixed;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;410\&quot; y=\&quot;250\&quot; width=\&quot;70\&quot; height=\&quot;70\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-3\&quot; value=\&quot;&amp;lt;b&amp;gt;m &amp;amp;lt; n&amp;lt;/b&amp;gt;\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;385\&quot; y=\&quot;370\&quot; width=\&quot;120\&quot; height=\&quot;90\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-4\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-1\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-3\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;470\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;420\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-5\&quot; value=\&quot;&amp;lt;b&amp;gt;P = n&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;220\&quot; y=\&quot;385\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-6\&quot; value=\&quot;&amp;lt;b&amp;gt;P = m&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;550\&quot; y=\&quot;385\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-7\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=1;exitY=0.5;exitDx=0;exitDy=0;entryX=0;entryY=0.5;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-5\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-3\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;440\&quot; y=\&quot;500\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;490\&quot; y=\&quot;450\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-8\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=1;entryY=0.5;entryDx=0;entryDy=0;exitX=0;exitY=0.5;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-6\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-3\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;440\&quot; y=\&quot;500\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;490\&quot; y=\&quot;450\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-10\&quot; value=\&quot;&amp;lt;b&amp;gt;I = 1, J = n&amp;lt;br&amp;gt;S = 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;385\&quot; y=\&quot;530\&quot; width=\&quot;120\&quot; height=\&quot;70\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-11\&quot; value=\&quot;&amp;lt;b&amp;gt;S = S * AI,J&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;385\&quot; y=\&quot;660\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-12\&quot; value=\&quot;&amp;lt;b&amp;gt;I = I + 1&amp;lt;br&amp;gt;J = J - 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;200\&quot; y=\&quot;775\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-13\&quot; value=\&quot;&amp;lt;b&amp;gt;I &amp;amp;lt; P&amp;lt;/b&amp;gt;\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;385\&quot; y=\&quot;760\&quot; width=\&quot;120\&quot; height=\&quot;90\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-14\&quot; value=\&quot;&amp;lt;b&amp;gt;I = 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;385\&quot; y=\&quot;910\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-15\&quot; value=\&quot;&amp;lt;b&amp;gt;J = 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;385\&quot; y=\&quot;1040\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-16\&quot; value=\&quot;&amp;lt;b&amp;gt;Vystup AI,J&amp;lt;/b&amp;gt;\&quot; style=\&quot;shape=parallelogram;perimeter=parallelogramPerimeter;whiteSpace=wrap;html=1;fixedSize=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;385\&quot; y=\&quot;1169\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-18\&quot; value=\&quot;&amp;lt;b&amp;gt;J = 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;385\&quot; y=\&quot;1280\&quot; width=\&quot;120\&quot; height=\&quot;90\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-19\&quot; value=\&quot;&amp;lt;b&amp;gt;I &amp;amp;lt; m&amp;lt;/b&amp;gt;\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;385\&quot; y=\&quot;1400\&quot; width=\&quot;120\&quot; height=\&quot;90\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-20\&quot; value=\&quot;&amp;lt;b&amp;gt;Vystup S&amp;lt;/b&amp;gt;\&quot; style=\&quot;shape=parallelogram;perimeter=parallelogramPerimeter;whiteSpace=wrap;html=1;fixedSize=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;385\&quot; y=\&quot;1550\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-22\&quot; value=\&quot;&amp;lt;b&amp;gt;Stop&amp;lt;/b&amp;gt;\&quot; style=\&quot;strokeWidth=2;html=1;shape=mxgraph.flowchart.terminator;whiteSpace=wrap;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;395\&quot; y=\&quot;1660\&quot; width=\&quot;100\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-23\&quot; value=\&quot;&amp;lt;b&amp;gt;J = J - 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;160\&quot; y=\&quot;1295\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-24\&quot; value=\&quot;&amp;lt;b&amp;gt;I = I + 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;-40\&quot; y=\&quot;1415\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-25\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-5\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;400\&quot; y=\&quot;700\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;450\&quot; y=\&quot;480\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;280\&quot; y=\&quot;480\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-26\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-6\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;580\&quot; y=\&quot;490\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;450\&quot; y=\&quot;480\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;610\&quot; y=\&quot;480\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-27\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;450\&quot; y=\&quot;530\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;450\&quot; y=\&quot;480\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-28\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.502;exitY=-0.045;exitDx=0;exitDy=0;exitPerimeter=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-11\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-10\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;630\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;580\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-29\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-11\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-13\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;370\&quot; y=\&quot;700\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;650\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-30\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-13\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-14\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;455\&quot; y=\&quot;730\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;455\&quot; y=\&quot;770\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-31\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-14\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-15\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;455\&quot; y=\&quot;860\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;455\&quot; y=\&quot;920\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-32\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-16\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-15\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;465\&quot; y=\&quot;870\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;465\&quot; y=\&quot;930\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-33\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-18\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-16\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;455\&quot; y=\&quot;1179\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;455\&quot; y=\&quot;1110\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-34\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-18\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-19\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;455\&quot; y=\&quot;1290\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;455\&quot; y=\&quot;1239\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-35\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-20\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-19\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;455\&quot; y=\&quot;1380\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;455\&quot; y=\&quot;1410\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-36\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;entryPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-20\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-22\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;455\&quot; y=\&quot;1560\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;455\&quot; y=\&quot;1500\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-37\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=1;exitY=0.5;exitDx=0;exitDy=0;entryX=0;entryY=0.5;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-24\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-19\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;160\&quot; y=\&quot;1120\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;210\&quot; y=\&quot;1070\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-40\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-24\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;160\&quot; y=\&quot;1120\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;440\&quot; y=\&quot;1010\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;20\&quot; y=\&quot;1010\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-41\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-23\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;30\&quot; y=\&quot;1425\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;440\&quot; y=\&quot;1150\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;220\&quot; y=\&quot;1150\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-44\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-12\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;250\&quot; y=\&quot;590\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;440\&quot; y=\&quot;640\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;260\&quot; y=\&quot;640\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-45\&quot; value=\&quot;+\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;495\&quot; y=\&quot;380\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-48\&quot; value=\&quot;+\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;445\&quot; y=\&quot;1360\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-52\&quot; value=\&quot;+\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;340\&quot; y=\&quot;1410\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-54\&quot; value=\&quot;-\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;435\&quot; y=\&quot;1475\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-57\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=1;entryY=0.5;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-18\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-23\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;440\&quot; y=\&quot;1530\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;490\&quot; y=\&quot;1480\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-58\&quot; value=\&quot;-\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;270\&quot; y=\&quot;1295\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-60\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;6u8Zr0-tXtAxJ4XObmGM-12\&quot; target=\&quot;6u8Zr0-tXtAxJ4XObmGM-13\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;330\&quot; y=\&quot;950\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;380\&quot; y=\&quot;900\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-61\&quot; value=\&quot;+\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;330\&quot; y=\&quot;770\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;6u8Zr0-tXtAxJ4XObmGM-62\&quot; value=\&quot;-\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;335\&quot; y=\&quot;380\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;/root&gt;&lt;/mxGraphModel&gt;&lt;/diagram&gt;&lt;/mxfile&gt;&quot;,&quot;toolbar&quot;:&quot;pages zoom layers lightbox&quot;,&quot;page&quot;:0}"></div>
<script type="text/javascript" src="https://app.diagrams.net/js/viewer-static.min.js"></script>
            </div>
        </div>
         


        <div>
            <button onclick="myFunction5()">Algoritmus sucetmat</button>
            <div id="myDIV5" style="display: none;">
<div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;xml&quot;:&quot;&lt;mxfile host=\&quot;app.diagrams.net\&quot; agent=\&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:131.0) Gecko/20100101 Firefox/131.0\&quot; version=\&quot;24.8.2\&quot;&gt;&lt;diagram name=\&quot;Страница — 1\&quot; id=\&quot;HTPIJoGb0AMS2akAiU8B\&quot;&gt;&lt;mxGraphModel dx=\&quot;2100\&quot; dy=\&quot;1336\&quot; grid=\&quot;1\&quot; gridSize=\&quot;10\&quot; guides=\&quot;1\&quot; tooltips=\&quot;1\&quot; connect=\&quot;1\&quot; arrows=\&quot;1\&quot; fold=\&quot;1\&quot; page=\&quot;1\&quot; pageScale=\&quot;1\&quot; pageWidth=\&quot;827\&quot; pageHeight=\&quot;1169\&quot; math=\&quot;0\&quot; shadow=\&quot;0\&quot;&gt;&lt;root&gt;&lt;mxCell id=\&quot;0\&quot;/&gt;&lt;mxCell id=\&quot;1\&quot; parent=\&quot;0\&quot;/&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-2\&quot; value=\&quot;&amp;lt;b&amp;gt;1&amp;lt;/b&amp;gt;\&quot; style=\&quot;ellipse;whiteSpace=wrap;html=1;aspect=fixed;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;490\&quot; y=\&quot;170\&quot; width=\&quot;60\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-4\&quot; value=\&quot;&amp;lt;b&amp;gt;J = 1, S = 1, Su = 0&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;460\&quot; y=\&quot;260\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-5\&quot; value=\&quot;&amp;lt;b&amp;gt;J = J + 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;260\&quot; y=\&quot;470\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-7\&quot; value=\&quot;&amp;lt;b&amp;gt;J &amp;amp;lt; n&amp;lt;/b&amp;gt;\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;460\&quot; y=\&quot;460\&quot; width=\&quot;120\&quot; height=\&quot;80\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-8\&quot; value=\&quot;&amp;lt;b&amp;gt;S = S * A2,J&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;460\&quot; y=\&quot;370\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-9\&quot; value=\&quot;&amp;lt;b&amp;gt;Su = Su + AI,n&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;460\&quot; y=\&quot;690\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-10\&quot; value=\&quot;&amp;lt;b&amp;gt;I = 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;460\&quot; y=\&quot;585\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-11\&quot; value=\&quot;&amp;lt;b&amp;gt;I &amp;amp;lt; m&amp;lt;/b&amp;gt;\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;460\&quot; y=\&quot;790\&quot; width=\&quot;120\&quot; height=\&quot;80\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-12\&quot; value=\&quot;&amp;lt;b&amp;gt;I &amp;amp;lt; m&amp;lt;/b&amp;gt;\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;460\&quot; y=\&quot;1400\&quot; width=\&quot;120\&quot; height=\&quot;80\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-13\&quot; value=\&quot;&amp;lt;b&amp;gt;J &amp;amp;lt; n&amp;lt;/b&amp;gt;\&quot; style=\&quot;rhombus;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;460\&quot; y=\&quot;1280\&quot; width=\&quot;120\&quot; height=\&quot;80\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-14\&quot; value=\&quot;&amp;lt;b&amp;gt;J = 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;460\&quot; y=\&quot;1040\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-15\&quot; value=\&quot;&amp;lt;b&amp;gt;I = 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;460\&quot; y=\&quot;910\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-16\&quot; value=\&quot;&amp;lt;b&amp;gt;Vystup AI,J&amp;lt;/b&amp;gt;\&quot; style=\&quot;shape=parallelogram;perimeter=parallelogramPerimeter;whiteSpace=wrap;html=1;fixedSize=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;460\&quot; y=\&quot;1160\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-18\&quot; value=\&quot;&amp;lt;b&amp;gt;2&amp;lt;/b&amp;gt;\&quot; style=\&quot;ellipse;whiteSpace=wrap;html=1;aspect=fixed;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;490\&quot; y=\&quot;1530\&quot; width=\&quot;60\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-19\&quot; value=\&quot;&amp;lt;b&amp;gt;I = I + 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;190\&quot; y=\&quot;1410\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-20\&quot; value=\&quot;J = J + 1\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;fontStyle=1\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;290\&quot; y=\&quot;1290\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-21\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-20\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;1460\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;520\&quot; y=\&quot;1120\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;350\&quot; y=\&quot;1120\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-23\&quot; value=\&quot;&amp;lt;b&amp;gt;I = I + 1&amp;lt;/b&amp;gt;\&quot; style=\&quot;rounded=0;whiteSpace=wrap;html=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;260\&quot; y=\&quot;800\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-24\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=1;exitY=0.5;exitDx=0;exitDy=0;entryX=0;entryY=0.5;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-23\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-11\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;860\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;810\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-25\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=1;exitY=0.5;exitDx=0;exitDy=0;entryX=0;entryY=0.5;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-5\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-7\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;520\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;470\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-26\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-4\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-2\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;520\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;470\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-27\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-8\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-4\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;520\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;470\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-28\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-7\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-8\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;520\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;470\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-29\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-10\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-7\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;740\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;690\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-30\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-9\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-10\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;740\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;690\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-31\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-11\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-9\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;930\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;880\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-32\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-15\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-11\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;1140\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;1090\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-33\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-14\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-15\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;1140\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;1090\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-34\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-16\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-14\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;1290\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;1240\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-35\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-13\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-16\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;1290\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;1240\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-36\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-12\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-13\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;1290\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;1240\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-37\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-12\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-18\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;1360\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;1310\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-38\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0;entryY=0.5;entryDx=0;entryDy=0;exitX=1;exitY=0.5;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-19\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-12\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;1290\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;470\&quot; y=\&quot;1240\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-39\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-19\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;420\&quot; y=\&quot;1290\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;520\&quot; y=\&quot;1000\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;250\&quot; y=\&quot;1000\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-40\&quot; value=\&quot;&amp;lt;b&amp;gt;2&amp;lt;/b&amp;gt;\&quot; style=\&quot;ellipse;whiteSpace=wrap;html=1;aspect=fixed;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;660\&quot; y=\&quot;1300\&quot; width=\&quot;60\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-41\&quot; value=\&quot;&amp;lt;b&amp;gt;Vystup S&amp;lt;br&amp;gt;&amp;lt;/b&amp;gt;\&quot; style=\&quot;shape=parallelogram;perimeter=parallelogramPerimeter;whiteSpace=wrap;html=1;fixedSize=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;630\&quot; y=\&quot;1380\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-42\&quot; value=\&quot;&amp;lt;b&amp;gt;&amp;lt;br&amp;gt;Vystup Su&amp;lt;br&amp;gt;&amp;lt;/b&amp;gt;\&quot; style=\&quot;shape=parallelogram;perimeter=parallelogramPerimeter;whiteSpace=wrap;html=1;fixedSize=1;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;630\&quot; y=\&quot;1460\&quot; width=\&quot;120\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-43\&quot; value=\&quot;&amp;lt;b&amp;gt;Stop&amp;lt;/b&amp;gt;\&quot; style=\&quot;strokeWidth=2;html=1;shape=mxgraph.flowchart.terminator;whiteSpace=wrap;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;640\&quot; y=\&quot;1550\&quot; width=\&quot;100\&quot; height=\&quot;60\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-44\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-40\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;650\&quot; y=\&quot;1360\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;690\&quot; y=\&quot;1380\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-45\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;entryX=0.5;entryY=1;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-42\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-41\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;680\&quot; y=\&quot;1480\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;730\&quot; y=\&quot;1430\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-46\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=0.5;exitY=1;exitDx=0;exitDy=0;entryX=0.5;entryY=0;entryDx=0;entryDy=0;entryPerimeter=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-42\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-43\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;680\&quot; y=\&quot;1480\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;730\&quot; y=\&quot;1430\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-47\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-23\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;430\&quot; y=\&quot;640\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;520\&quot; y=\&quot;670\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;320\&quot; y=\&quot;670\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-48\&quot; value=\&quot;+\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;414\&quot; y=\&quot;1410\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-49\&quot; value=\&quot;+\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;413\&quot; y=\&quot;1280\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-51\&quot; value=\&quot;-\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;510\&quot; y=\&quot;1500\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-53\&quot; value=\&quot;-\&quot; style=\&quot;text;html=1;align=center;verticalAlign=middle;whiteSpace=wrap;rounded=0;\&quot; vertex=\&quot;1\&quot; parent=\&quot;1\&quot;&gt;&lt;mxGeometry x=\&quot;500\&quot; y=\&quot;1360\&quot; width=\&quot;60\&quot; height=\&quot;30\&quot; as=\&quot;geometry\&quot;/&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-54\&quot; value=\&quot;\&quot; style=\&quot;endArrow=none;html=1;rounded=0;exitX=1;exitY=0.5;exitDx=0;exitDy=0;entryX=0;entryY=0.5;entryDx=0;entryDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-20\&quot; target=\&quot;Tm-hWG6p0UWhTWzAL1I3-13\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;430\&quot; y=\&quot;1330\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;480\&quot; y=\&quot;1280\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;mxCell id=\&quot;Tm-hWG6p0UWhTWzAL1I3-55\&quot; value=\&quot;\&quot; style=\&quot;endArrow=classic;html=1;rounded=0;exitX=0.5;exitY=0;exitDx=0;exitDy=0;\&quot; edge=\&quot;1\&quot; parent=\&quot;1\&quot; source=\&quot;Tm-hWG6p0UWhTWzAL1I3-5\&quot;&gt;&lt;mxGeometry width=\&quot;50\&quot; height=\&quot;50\&quot; relative=\&quot;1\&quot; as=\&quot;geometry\&quot;&gt;&lt;mxPoint x=\&quot;600\&quot; y=\&quot;730\&quot; as=\&quot;sourcePoint\&quot;/&gt;&lt;mxPoint x=\&quot;520\&quot; y=\&quot;340\&quot; as=\&quot;targetPoint\&quot;/&gt;&lt;Array as=\&quot;points\&quot;&gt;&lt;mxPoint x=\&quot;320\&quot; y=\&quot;340\&quot;/&gt;&lt;/Array&gt;&lt;/mxGeometry&gt;&lt;/mxCell&gt;&lt;/root&gt;&lt;/mxGraphModel&gt;&lt;/diagram&gt;&lt;/mxfile&gt;&quot;,&quot;toolbar&quot;:&quot;pages zoom layers lightbox&quot;,&quot;page&quot;:0}"></div>
<script type="text/javascript" src="https://app.diagrams.net/js/viewer-static.min.js"></script>
</div>
</div>



          <script>
            function myFunction1() {
              let div = document.getElementById("myDIV1");
              div.style.display = (div.style.display === 'none') ? 'block' : 'none';
            }
        
            function myFunction2() {
              let div = document.getElementById("myDIV2");
              div.style.display = (div.style.display === 'none') ? 'block' : 'none';
            }
          
            function myFunction3() {
               let div = document.getElementById("myDIV3");
               div.style.display = (div.style.display === 'none') ? 'block' : 'none';
            }

              function myFunction4() {
              let div = document.getElementById("myDIV4");
              div.style.display = (div.style.display === 'none') ? 'block' : 'none';
            }
            function myFunction5() {
              let div = document.getElementById("myDIV5");
              div.style.display = (div.style.display === 'none') ? 'block' : 'none';
            }
          </script>












</div>
    <div id="content-2" class="content">
        
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Boeing 747</title>
    <style>
       
        body {
            background-color: #E8DFCA; 
            color: black; 
            font-family: Arial, sans-serif; 
        }
        h1 {
            color: red; 
        }
        a {
            color: blue; 
        }
        footer {
            font-size: 0.8em; 
            margin-top: 20px; 
        }
    </style>
</head>
<body>
  
    <h1>Boeing 747</h1>

 
    <p ><strong>Boeing 747</strong>, známy aj pod názvom <strong>Jumbo Jet</strong> je asi najznámejšie dopravné lietadlo vďaka svojmu tvaru trupu. Dosiaľ to bolo najväčšie používané komerčné lietadlo. Jeho kraľovanie vystriedalo lietadlo spoločnosti Airbus s označením A380. Štvormotorové dvojposchodové lietadlo vyrábané spoločnosťou Boeing Commercial Airplanes je schopné prepraviť 416 až 524 pasažierov.</p>
    <p>Do novembra 2017 bolo vyrobených až 1540 kusov tohto veľmi úspešného modelu. Toto lietadlo je schopné lietať rýchlosťou až 1 100 km/h na vzdialenosť 14 205 km. Niektoré konfigurácie tohto lietadla sú schopné zaletieť vzdialenosť New York – Hongkong non-stop. Táto vzdialenosť zodpovedá 1/3 vzdialenosti letu okolo celej Zeme. V roku 1998 Boeing 747-400 spoločnosti Qantas preletel vzdialenosť Londýn – Sydney non-stop, ale neviezol ani cestujúcich, ani náklad. Táto vzdialenosť zodpovedá dĺžke 14 000 – 18 001 km.</p>

   
    <h2>Obsah</h2>

    <ul>
        <li><a href="#historia">História</a></li>
        <li><a href="#verzie">Verzie</a></li>
        <li><a href="#zaujimavosti">Zaujímavosti</a></li>
        <li><a href="#referencie">Referencie</a></li>
    </ul>

    
    <h2 id="historia">História</h2>
    <p>Boeing 747 bol vyvinutý ako dôsledok rýchleho rastu leteckej dopravy v 60-tych rokoch 20. storočia. Prvou spoločnosťou používajúcou tento model sa stala americká spoločnosť Pan Am.</p>

    <h2 id="verzie">Verzie</h2>
    <h3>Boeing 747-100</h3>
<ul>
    <li>bol prvýkrát predstavený v roku 1968. Prototyp s názvom „City of Everett“ absolvoval prvý let 9. februára 1969 a v roku 1970 absolvoval prvý komerčný let vo farbách spoločnosti Pan American World Airways. Vojenská verzia tohto lietadla sa nazýva C-19. Nákladná verzia sa nazýva Boeing 747-100F (Freighter).</li>
</ul>
<h3>Boeing 747SR</h3>
<ul>
    <li>je verzia Boeingu 747-100 s kratším doletom, ktorá je schopná prepraviť až 550 cestujúcich. Bola navrhnutá najmä pre japonské vnútroštátne lety.</li>
</ul>
<h3>Boeing 747-200</h3>
<ul>
    <li>je verzia predstavená v roku 1971 so silnejšími motormi ako jej predchodca. Vyrábala sa aj vo variantoch 747-200F Freighter ako nákladná verzia a 747-200C Convertible ako prestaviteľná verzia na prepravu nákladu aj ľudí.</li>
</ul>
<h3>Boeing 747SP</h3>
<ul>
    <li>je používaný od roku 1976. Za celú históriu tohto modelu bolo vyrobených len 45 kusov tohto modelu. Používa sa dodnes v niektorých krajinách stredného východu. Vyznačuje sa kratším trupom a dlhým doletom.</li>
</ul>
<h3>Boeing 747-300</h3>
<ul>
    <li>mala byť trojmotorová verzia ako konkurencia pre model Lockheed L-1011 TriStar. Model s troma motormi sa nikdy nedostal do prevádzky.</li>
</ul>
<h3>Boeing 747-400</h3>
<ul>
    <li>je jediná verzia, ktorá sa momentálne vyrába. Tento model má úplne novú kabínu, interiér, ale aj prvky vnútornej zábavy. Je k dispozícii ako verzia 747-400M, 747-400F ale aj ako 747-400BCF.</li>
</ul>
<h3>Boeing 747 Large Cargo Freighter</h3>
<ul>
    <li>je nákladné lietadlo s trupom podobným ako má lietadlo Beluga od spoločnosti Airbus alebo ako Super Guppy.</li>
</ul>
<h3>Boeing 747-8</h3>
<ul>
    <li>je najnovšia verzia modelu Boeing 747 zaradená 13. februára 2011 o 11:00 v Seattle. Budúcnosť programu 747 V roku 1996 spoločnosť Boeing Commercial Airplanes začala vyvíjať novú generáciu modelu 747 ako reakciu na program Airbus A380. Tento model bude schopný prepraviť až 800 cestujúcich.</li>
</ul>
    <h2 id="zaujimavosti">Zaujímavosti</h2>
    <ul>
        <li><strong>Air Force One</strong> je asi najznámejší Boeing 747. Je to lietadlo používané ako lietadlo prezidenta USA.</li>
        <li>Boeing 747 sa skladá z viac ako <strong>6 miliónov častí</strong>, ktoré pochádzajú z viac ako 33 krajín.</li>
        <li>Boeing 747 sa veľmi často používa vo filmoch.</li>
        <li>Boeing 747 prepravil viac ako <strong>3,6 miliardy ľudí</strong> (to je viac ako polovica svetovej populácie).</li>
    </ul>
    <h2 id="referencie">Referencie</h2>
    <ol>
        <li>Federal Aviation Administration, Lessons Learned [online]. lessonslearned.faa.gov, [cit. 2018-04-17].</li>
        <li>Boeing 747-400 [online]. www.deltamuseum.org, [cit. 2018-04-17].</li>
        <li>Brenjen, List of preserved and interesting Boeing 747 aircraft [online]. www.saamuseum.co.za, [cit. 2018-04-17].</li>
    </ol>
    <footer>
        <palign="right">Savchenko Dmytro<br>AR 2024/2025, ZS<br>Informatika, Bc-MLD-D-1</palign=>
    </footer>
<div style="clear:both;width:100%;height:90px;padding:0px;z-index:99;position:relative;"><div style="width:728px;height:90px;margin:0 auto;">        <script src="/assetsWZ/static/floatad.js" async defer></script></div></div><!--WZ-REKLAMA-1.0IK--></body>
</html>
        >
    </div>









    <div id="content-3" class="content">
      
       
        
 
    <!-- Перевірте шляхи до кожного зображення у href -->
    <!-- <area shape="rect" coords="20,120,150,30" href="CSS/vrtulniky/mi-8.jpg" alt="Mi-8">
    <area shape="rect" coords="168,119,300,30" href="CSS/vrtulniky/mi-2.jpg" alt="Mi-2">
    <area shape="rect" coords="26,231,145,142" href="CSS/vrtulniky/mi-24.jpg" alt="Mi-24">
    <area shape="rect" coords="163,223,305,151" href="CSS/vrtulniky/mi-17.jpg" alt="Mi-17">
</map>
    -->
       
  
          
    <div class="top-bar">
      
        <h1>Mapa vrtuľníki</h1>
    </div>

    <div class="gallery-container">
        <p class="photo-title">Helikoptéry</p>

        <div class="gallery">
            <div class="gallery-item">
                <img src="CSS/vrtulniky/mi-8.jpg" onclick="openFullscreen(this)">
                <div class="caption">MI-8</div>
            </div>
            <div class="gallery-item">
                <img src="CSS/vrtulniky/mi-2.jpg" onclick="openFullscreen(this)">
                <div class="caption">MI-2</div>
            </div>
            <div class="gallery-item">
                <img src="CSS/vrtulniky/mi-24.jpg" onclick="openFullscreen(this)">
                <div class="caption">MI-24</div>
            </div>
            <div class="gallery-item">
                <img src="CSS/vrtulniky/mi-17.jpg" onclick="openFullscreen(this)">
                <div class="caption">MI-17</div>
            </div>
        </div>
    </div>

    <div class="fullscreen" id="fullscreen" onclick="closeFullscreen()">
        <img id="fullscreen-img" src="" alt="Enlarged Image">
    </div>

    <script>
        function openFullscreen(img) {
            const fullscreen = document.getElementById("fullscreen");
            const fullscreenImg = document.getElementById("fullscreen-img");
            fullscreenImg.src = img.src;
            fullscreen.style.display = "flex";
        }

        function closeFullscreen() {
            const fullscreen = document.getElementById("fullscreen");
            fullscreen.style.display = "none";
        }
    </script>
            <style>
              
            
                .top-bar {
                    width: 100%;
                    background-color: #333;
                    color: #fff;
                    padding: 15px;
                    text-align: center;
                    position: fixed;
                    top: 0;
                    left: 0;
                    z-index: 10;
                    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            
                .top-bar .button {
                    position: absolute; /* Фиксированное положение для кнопки */
                    left: 20px; /* Отступ от левого края */
                    top: 15px; /* Отступ от верхнего края */
                    color: white; /* Цвет текста кнопки */
                    background-color: #333; /* Цвет фона кнопки */
                    padding: 10px 15px; /* Отступы кнопки */
                    border: none; /* Убираем рамку */
                    border-radius: 5px; /* Закругленные углы */
                    font-size: 18px; /* Размер шрифта */
                    text-decoration: none; /* Убираем подчеркивание */
                    transition: background-color 0.3s ease, color 0.3s ease; /* Плавный переход */
                }
            
                .top-bar .button:hover {
                    background-color: white; /* Цвет фона при наведении */
                    color: black; /* Цвет текста при наведении */
                }
            
                .top-bar h1 {
                    margin: 0;
                    font-size: 28px; 
                }
            
                .gallery-container {
                    margin-top: 100px; 
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                }
            
                .photo-title {
                    font-size: 24px;
                    font-weight: bold;
                    margin-bottom: 20px;
                }
            
                .gallery {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    gap: 30px;
                }
            
                .gallery-item {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                }
            
                .gallery-item img {
                    width: 250px; 
                    height: auto;
                    cursor: pointer;
                    transition: transform 0.3s ease;
                }
            
                .gallery-item img:hover {
                    transform: scale(1.1); 
                }
            
                .caption {
                    font-weight: bold;
                    font-size: 20px; 
                    margin-top: 10px;
                }
            
                .fullscreen {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100vw;
                    height: 100vh;
                    background-color: rgba(50, 45, 45, 0.9);
                    justify-content: center;
                    align-items: center;
                    z-index: 20;
                }
            
                
            </style>
      
           
           






            
    
    </div>

    <div id="content-4" class="content">
      







        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulár</title>
        <style>
          table {
            width: 100%;
            height: 120%; /* Додано нову висоту на 20% більше */
            border-collapse: collapse;
          }
        
          th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #000;
            background-color: #d7d7d7;
          }
        
          input[type="text"], select {
            width: 100%;
            box-sizing: border-box;
          }
        
          input[type="text"] {
            height: 30px;
          }
        
          input[type="checkbox"], input[type="radio"] {
            margin-right: 5px;
          }
        
          button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
          }
        
          button:hover {
            background-color: #45a049;
          }
        </style>
        </head>
        
    
          <table>
            <tr>
              <th>Meno</th>
              <th><input type="text" name="miestostret" placeholder="Uveďte meno" required></th>
              <th>Heslo</th>
              <th><input type="text" name="miestostret" placeholder="Uveďte heslo" required></th>
            </tr>
            <tr>
              <td>Odbor</td>
              <td>
                <label><input type="radio" name="odbor" value="TIS"> TIS</label>
                <label><input type="radio" name="odbor" value="ELE" checked> ELE</label>
              </td>
              <td>Trieda</td>
              <td>
                <select name="trieda">
                  <optgroup label="Prvý ročník">
                    <option>1. A</option>
                    <option>1. B</option>
                    <option>1. C</option>
                    <option>2. D</option>
                  </optgroup>
                  <optgroup label="Druhý ročník">
                    <option>2. A</option>
                    <option>2. B</option>
                    <option>2. C</option>
                    <option>2. D</option>
                  </optgroup>
                </select>
              </td>
            </tr>
            <tr>
              <td>Voliteľne predmety</td>
              <td colspan="3">
                <label><input type="checkbox" name="ins" value="INS" checked> INS</label>
                <label><input type="checkbox" name="cvm" value="CVM"> ELE</label>
                <label><input type="checkbox" name="cuj" value="CUJ"> CUJ</label>
                <label><input type="checkbox" name="pra" value="PRA"> PRA</label>
              </td>
            </tr>
            <tr>
              <td>Pripomienky</td>
              <td colspan="3"><input type="text" name="miestostret" placeholder="Uveďte pripomienky" required></td>
            </tr>
            <tr>
              <td colspan="2"><button name="Vymazať" value="Vymazať">Vymazať</button></td>
              <td colspan="2"><button name="Odoslať" value="Odoslať">Odoslať</button></td>
            </tr>
          </table>
      
        











        
    </div>

    <div id="content-5" class="content">
        <div class="container">
            <!-- Left Column with Image and Professional Details -->
            <div class="left-column">
                <img src="CSS/Foto/Môj autoportrét.JPG" alt="Pilot Picture">
                <h2>PROFESSIONAL DETAILS</h2>
                <div class="details">
                    <p><strong>NAME</strong> Dmytro Savchenko</p>
                    <p><strong>AGE</strong> 18 Years</p>
                    <p><strong>LOCATION</strong> Košice, Slovakia</p>
                    <p><strong>EXPERIENCE</strong> 3 Year</p>
                  
                </div>
            </div>
        
            <!-- Right Column with About Me Section -->
            <div class="right-column">
                <div class="about-me">
                    <h2>ABOUT ME</h2>
                    <p><strong>NAME</strong> Dmytro Savchenko</p>
                    <p><strong>LOCATION</strong> Košice, Slovakia</p>
                    <p><strong>WEBSITE</strong> <a href="https://salo.li/27A6E6b" class="website">https://salo.li/27A6E6b</a></p>
                    <p><strong>AGE</strong> 18 Years</p>
                    <p><strong>EXPERIENCE</strong> 3 Year</p>
                    <p><strong>CAREER LEVEL</strong> Mid-Level</p>
                    <p><strong>PHONE</strong> 094 4542 529</p>
                    <p><strong>E-MAIL</strong> dimasavchenko201355@gmail.com</p>
                </div>
                <div class="description">
                    <h2>I'M KAMERAMAN</h2>
                    <p>I have been professionally engaged in video and photo shooting for 3 years. I make shots that will be remembered for a long time for their vivid emotions. Short films and music videos are also in my portfolio</p>
                    
                </div>
            </div>
        </div>
        
        <style>
            .container {
                display: flex;
                max-width: 900px;
                margin: 20px auto;
                background-color: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            .left-column {
                background-color: #e5e5e5;
                padding: 20px;
                width: 40%; /* Збільшили ширину лівої колонки */
                text-align: center;
            }
            .left-column img {
                width: 100%; /* Зображення заповнює всю ширину колонки */
                aspect-ratio: 16 / 9; /* Співвідношення сторін 16:9 */
                border-radius: 4px;
            }
            .left-column h2, .right-column h2 {
                font-size: 1.2em;
                margin-bottom: 10px;
                color: #333;
            }
            .details {
                text-align: left;
                font-size: 0.9em;
                line-height: 1.5em;
            }
            .details p {
                margin: 5px 0;
            }
            .right-column {
                padding: 20px;
                width: 60%; /* Зменшили ширину правої колонки */
            }
            .about-me h2 {
                color: #333;
                font-size: 1.5em;
                margin-bottom: 10px;
            }
            .about-me .name, .about-me .location, .about-me .degree {
                font-weight: bold;
                margin-top: 5px;
            }
            .about-me .contact p {
                margin: 3px 0;
            }
            .about-me .website {
                color: #0000ee;
                text-decoration: none;
            }
            .description {
                font-size: 0.9em;
                color: #666;
                margin-top: 10px;
                line-height: 1.5em;
            }
        </style>
        
    </div>

    <script>
        function showContent(number) {
            // Сховати всі контейнери з контентом
            var contents = document.querySelectorAll('.content');
            contents.forEach(content => content.classList.remove('active'));

            // Показати відповідний контейнер
            var contentToShow = document.getElementById('content-' + number);
            contentToShow.classList.add('active');
        }
    </script>

</body>
</html>

