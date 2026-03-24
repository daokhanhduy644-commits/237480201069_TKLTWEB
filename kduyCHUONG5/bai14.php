<!doctype html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <title>Chương Trình Xử Lý Ma Trận</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Share+Tech+Mono&family=Exo+2:wght@300;400;600;700&display=swap");

      :root {
        --bg: #020c1b;
        --panel: #0a1628;
        --blue1: #00d4ff;
        --blue2: #0080ff;
        --blue3: #003a8c;
        --glow: rgba(0, 212, 255, 0.3);
        --text: #cde8ff;
        --dim: #5a8ab0;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        background: var(--bg);
        font-family: "Exo 2", sans-serif;
        color: var(--text);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        overflow-x: hidden;
      }

      body::before {
        content: "";
        position: fixed;
        inset: 0;
        background:
          radial-gradient(
            ellipse 80% 50% at 20% 20%,
            rgba(0, 128, 255, 0.08) 0%,
            transparent 60%
          ),
          radial-gradient(
            ellipse 60% 40% at 80% 80%,
            rgba(0, 212, 255, 0.06) 0%,
            transparent 60%
          );
        pointer-events: none;
      }

      .container {
        width: 100%;
        max-width: 820px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
      }

      /* HEADER */
      .header {
        grid-column: 1 / -1;
        text-align: center;
        padding: 28px;
        background: var(--panel);
        border: 1px solid var(--blue3);
        border-top: 3px solid var(--blue1);
        clip-path: polygon(
          0 0,
          100% 0,
          100% calc(100% - 16px),
          calc(100% - 16px) 100%,
          0 100%
        );
        position: relative;
      }
      .header::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(
          90deg,
          transparent,
          var(--blue1),
          var(--blue2),
          transparent
        );
        animation: scanline 3s linear infinite;
      }
      @keyframes scanline {
        0% {
          transform: translateX(-100%);
        }
        100% {
          transform: translateX(100%);
        }
      }
      .header h1 {
        font-size: 1.5rem;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: var(--blue1);
        text-shadow: 0 0 20px var(--blue1);
      }
      .header p {
        color: var(--dim);
        font-size: 0.85rem;
        margin-top: 6px;
        letter-spacing: 1px;
      }

      /* PANEL */
      .panel {
        background: var(--panel);
        border: 1px solid var(--blue3);
        padding: 24px;
        position: relative;
      }
      .panel-title {
        font-size: 0.7rem;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: var(--blue2);
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 10px;
      }
      .panel-title::before {
        content: "";
        display: inline-block;
        width: 8px;
        height: 8px;
        background: var(--blue1);
        box-shadow: 0 0 8px var(--blue1);
        animation: blink 1.2s ease-in-out infinite;
      }
      @keyframes blink {
        0%,
        100% {
          opacity: 1;
        }
        50% {
          opacity: 0.2;
        }
      }

      /* MATRIX DISPLAY */
      .matrix-wrapper {
        grid-column: 1 / -1;
      }
      .matrix-display {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        font-family: "Share Tech Mono", monospace;
        padding: 10px 0;
      }
      .bracket {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 124px;
        color: var(--blue1);
        font-size: 2rem;
        line-height: 1;
        text-shadow: 0 0 12px var(--blue1);
      }
      .matrix-grid {
        display: grid;
        grid-template-columns: repeat(5, 58px);
        grid-template-rows: repeat(4, 30px);
        gap: 3px;
      }
      .cell {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.92rem;
        color: var(--text);
        border: 1px solid rgba(0, 80, 180, 0.3);
        background: rgba(0, 30, 80, 0.4);
        transition: all 0.3s;
        cursor: default;
        position: relative;
      }
      .cell:hover {
        background: rgba(0, 100, 255, 0.2);
        border-color: var(--blue1);
        color: #fff;
        text-shadow: 0 0 8px var(--blue1);
      }
      .cell.highlight-max {
        background: rgba(0, 212, 255, 0.25);
        border-color: var(--blue1);
        color: var(--blue1);
        font-weight: 700;
        box-shadow: inset 0 0 12px rgba(0, 212, 255, 0.2);
        animation: pulse-max 1s ease-in-out infinite;
      }
      .cell.highlight-min {
        background: rgba(0, 80, 255, 0.25);
        border-color: #4af;
        color: #4af;
        font-weight: 700;
        box-shadow: inset 0 0 12px rgba(0, 150, 255, 0.2);
        animation: pulse-min 1s ease-in-out infinite;
      }
      @keyframes pulse-max {
        0%,
        100% {
          box-shadow:
            inset 0 0 12px rgba(0, 212, 255, 0.2),
            0 0 8px rgba(0, 212, 255, 0.4);
        }
        50% {
          box-shadow:
            inset 0 0 20px rgba(0, 212, 255, 0.4),
            0 0 16px rgba(0, 212, 255, 0.6);
        }
      }
      @keyframes pulse-min {
        0%,
        100% {
          box-shadow:
            inset 0 0 12px rgba(0, 150, 255, 0.2),
            0 0 8px rgba(0, 150, 255, 0.4);
        }
        50% {
          box-shadow:
            inset 0 0 20px rgba(0, 150, 255, 0.4),
            0 0 16px rgba(0, 150, 255, 0.6);
        }
      }

      /* MENU BUTTONS */
      .menu-panel {
        grid-column: 1 / -1;
      }
      .menu-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
      }
      .btn {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 16px 20px;
        background: rgba(0, 30, 80, 0.5);
        border: 1px solid var(--blue3);
        color: var(--text);
        font-family: "Exo 2", sans-serif;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.25s;
        text-align: left;
        clip-path: polygon(
          0 0,
          100% 0,
          100% calc(100% - 10px),
          calc(100% - 10px) 100%,
          0 100%
        );
      }
      .btn:hover {
        background: rgba(0, 80, 200, 0.3);
        border-color: var(--blue1);
        color: #fff;
        box-shadow: 0 0 20px rgba(0, 100, 255, 0.2);
      }
      .btn:active {
        transform: scale(0.98);
      }
      .btn-num {
        width: 32px;
        height: 32px;
        border: 1px solid var(--blue2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Share Tech Mono", monospace;
        font-size: 0.85rem;
        color: var(--blue1);
        flex-shrink: 0;
      }
      .btn-label {
        line-height: 1.3;
      }

      /* RESULT PANEL */
      .result-panel {
        grid-column: 1 / -1;
      }
      .result-box {
        background: rgba(0, 10, 30, 0.8);
        border: 1px solid var(--blue3);
        border-left: 3px solid var(--blue1);
        padding: 18px 22px;
        font-family: "Share Tech Mono", monospace;
        min-height: 70px;
        position: relative;
        transition: all 0.3s;
      }
      .result-label {
        font-size: 0.65rem;
        letter-spacing: 2px;
        color: var(--dim);
        text-transform: uppercase;
        margin-bottom: 8px;
      }
      .result-value {
        font-size: 1.4rem;
        color: var(--blue1);
        text-shadow: 0 0 16px rgba(0, 212, 255, 0.5);
        transition: all 0.4s;
      }
      .result-value.pop {
        animation: pop 0.4s ease-out;
      }
      @keyframes pop {
        0% {
          transform: scale(0.85);
          opacity: 0;
        }
        60% {
          transform: scale(1.05);
        }
        100% {
          transform: scale(1);
          opacity: 1;
        }
      }

      /* CODE PANEL */
      .code-panel {
        grid-column: 1 / -1;
      }
      pre {
        background: rgba(0, 5, 20, 0.9);
        border: 1px solid var(--blue3);
        padding: 20px;
        font-family: "Share Tech Mono", monospace;
        font-size: 0.78rem;
        color: #7dbfff;
        overflow-x: auto;
        line-height: 1.7;
        max-height: 340px;
        overflow-y: auto;
      }
      pre .kw {
        color: #00d4ff;
      }
      pre .fn {
        color: #5eecff;
      }
      pre .cm {
        color: #3a6080;
      }
      pre .str {
        color: #a0d8ff;
      }
      pre .num {
        color: #80c8ff;
      }

      /* SCROLLBAR */
      ::-webkit-scrollbar {
        width: 6px;
      }
      ::-webkit-scrollbar-track {
        background: var(--bg);
      }
      ::-webkit-scrollbar-thumb {
        background: var(--blue3);
        border-radius: 3px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <!-- HEADER -->
      <div class="header">
        <h1>⬡ Chương Trình Xử Lý Ma Trận</h1>
        <p>Bài 14 · Ma trận thực 4×5 · Một chiều</p>
      </div>

      <!-- MATRIX DISPLAY -->
      <div class="panel matrix-wrapper">
        <div class="panel-title">Ma Trận Đầu Vào</div>
        <div class="matrix-display">
          <div class="bracket">
            <span>⌈</span><span> </span><span> </span><span>⌊</span>
          </div>
          <div class="matrix-grid" id="matrixGrid"></div>
          <div class="bracket">
            <span>⌉</span><span> </span><span> </span><span>⌋</span>
          </div>
        </div>
      </div>

      <!-- MENU -->
      <div class="panel menu-panel">
        <div class="panel-title">Menu Chức Năng</div>
        <div class="menu-grid">
          <button class="btn" onclick="findMax()">
            <div class="btn-num">a</div>
            <div class="btn-label">
              Tìm số lớn nhất<br /><span
                style="color: var(--dim); font-size: 0.78rem"
                >trong ma trận</span
              >
            </div>
          </button>
          <button class="btn" onclick="findMin()">
            <div class="btn-num">b</div>
            <div class="btn-label">
              Tìm số nhỏ nhất<br /><span
                style="color: var(--dim); font-size: 0.78rem"
                >trong ma trận</span
              >
            </div>
          </button>
          <button class="btn" onclick="findSum()">
            <div class="btn-num">c</div>
            <div class="btn-label">
              Tính tổng các số<br /><span
                style="color: var(--dim); font-size: 0.78rem"
                >trong ma trận</span
              >
            </div>
          </button>
          <button class="btn" onclick="printMatrix()">
            <div class="btn-num">d</div>
            <div class="btn-label">
              In dạng toán học<br /><span
                style="color: var(--dim); font-size: 0.78rem"
                >ra màn hình</span
              >
            </div>
          </button>
        </div>
      </div>

      <!-- RESULT -->
      <div class="panel result-panel">
        <div class="panel-title">Kết Quả</div>
        <div class="result-box">
          <div class="result-label" id="resultLabel">
            Chọn một chức năng để xem kết quả
          </div>
          <div class="result-value" id="resultValue">—</div>
        </div>
      </div>

      <!-- CODE -->
      <div class="panel code-panel">
        <div class="panel-title">Source Code C</div>
        <pre id="codeBlock"></pre>
      </div>
    </div>

    <script>
      const matrix = [
        [1.1, 2.3, 3.1, 4.0, 5.0],
        [6.2, 7.7, 8.8, 9.5, 1.2],
        [4.6, 1.9, 3.6, 8.9, 1.5],
        [1.6, 1.7, 1.8, 1.9, 2.0],
      ];

      // Render matrix
      const grid = document.getElementById("matrixGrid");
      matrix.forEach((row, i) =>
        row.forEach((val, j) => {
          const cell = document.createElement("div");
          cell.className = "cell";
          cell.id = `cell-${i}-${j}`;
          cell.textContent = val.toFixed(1);
          grid.appendChild(cell);
        }),
      );

      function clearHighlight() {
        document
          .querySelectorAll(".cell")
          .forEach((c) => (c.className = "cell"));
      }

      function setResult(label, value) {
        const rv = document.getElementById("resultValue");
        document.getElementById("resultLabel").textContent = label;
        rv.textContent = value;
        rv.className = "result-value";
        requestAnimationFrame(() => (rv.className = "result-value pop"));
      }

      function findMax() {
        clearHighlight();
        let max = -Infinity,
          ri = 0,
          rj = 0;
        matrix.forEach((row, i) =>
          row.forEach((v, j) => {
            if (v > max) {
              max = v;
              ri = i;
              rj = j;
            }
          }),
        );
        document.getElementById(`cell-${ri}-${rj}`).className =
          "cell highlight-max";
        setResult(
          "a) Số lớn nhất trong ma trận",
          `MAX = ${max.toFixed(1)}   [hàng ${ri + 1}, cột ${rj + 1}]`,
        );
      }

      function findMin() {
        clearHighlight();
        let min = Infinity,
          ri = 0,
          rj = 0;
        matrix.forEach((row, i) =>
          row.forEach((v, j) => {
            if (v < min) {
              min = v;
              ri = i;
              rj = j;
            }
          }),
        );
        document.getElementById(`cell-${ri}-${rj}`).className =
          "cell highlight-min";
        setResult(
          "b) Số nhỏ nhất trong ma trận",
          `MIN = ${min.toFixed(1)}   [hàng ${ri + 1}, cột ${rj + 1}]`,
        );
      }

      function findSum() {
        clearHighlight();
        const sum = matrix.flat().reduce((a, b) => a + b, 0);
        setResult("c) Tổng tất cả các phần tử", `Σ = ${sum.toFixed(1)}`);
      }

      function printMatrix() {
        clearHighlight();
        const rows = matrix.map((row) =>
          row.map((v) => v.toFixed(1).padStart(5)).join(" "),
        );
        const lines = rows
          .map((r, i) => {
            const l = i === 0 ? "⌈" : i === matrix.length - 1 ? "⌊" : "|";
            const r2 = i === 0 ? "⌉" : i === matrix.length - 1 ? "⌋" : "|";
            return `${l}${r} ${r2}`;
          })
          .join("\n");
        setResult("d) Ma trận dạng toán học", lines);
        document.getElementById("resultValue").style.fontSize = "0.85rem";
        document.getElementById("resultValue").style.whiteSpace = "pre";
      }

      // Source code display
      document.getElementById("codeBlock").innerHTML =
        `<span class="cm">// Bai 14 - Xu ly ma tran thuc</span>
<span class="kw">#include</span> <span class="str">&lt;stdio.h&gt;</span>
<span class="kw">#define</span> ROWS <span class="num">4</span>
<span class="kw">#define</span> COLS <span class="num">5</span>

<span class="cm">// a) Tim so lon nhat</span>
<span class="kw">float</span> <span class="fn">timMax</span>(<span class="kw">float</span> a[ROWS][COLS]) {
    <span class="kw">float</span> max = a[<span class="num">0</span>][<span class="num">0</span>];
    <span class="kw">for</span> (<span class="kw">int</span> i=<span class="num">0</span>; i&lt;ROWS; i++)
        <span class="kw">for</span> (<span class="kw">int</span> j=<span class="num">0</span>; j&lt;COLS; j++)
            <span class="kw">if</span> (a[i][j] > max) max = a[i][j];
    <span class="kw">return</span> max;
}

<span class="cm">// b) Tim so nho nhat</span>
<span class="kw">float</span> <span class="fn">timMin</span>(<span class="kw">float</span> a[ROWS][COLS]) {
    <span class="kw">float</span> min = a[<span class="num">0</span>][<span class="num">0</span>];
    <span class="kw">for</span> (<span class="kw">int</span> i=<span class="num">0</span>; i&lt;ROWS; i++)
        <span class="kw">for</span> (<span class="kw">int</span> j=<span class="num">0</span>; j&lt;COLS; j++)
            <span class="kw">if</span> (a[i][j] &lt; min) min = a[i][j];
    <span class="kw">return</span> min;
}

<span class="cm">// c) Tinh tong</span>
<span class="kw">float</span> <span class="fn">tinhTong</span>(<span class="kw">float</span> a[ROWS][COLS]) {
    <span class="kw">float</span> tong = <span class="num">0</span>;
    <span class="kw">for</span> (<span class="kw">int</span> i=<span class="num">0</span>; i&lt;ROWS; i++)
        <span class="kw">for</span> (<span class="kw">int</span> j=<span class="num">0</span>; j&lt;COLS; j++)
            tong += a[i][j];
    <span class="kw">return</span> tong;
}

<span class="cm">// d) In dang toan hoc</span>
<span class="kw">void</span> <span class="fn">inMaTran</span>(<span class="kw">float</span> a[ROWS][COLS]) {
    <span class="kw">for</span> (<span class="kw">int</span> i=<span class="num">0</span>; i&lt;ROWS; i++) {
        <span class="kw">if</span> (i==<span class="num">0</span>)         printf(<span class="str">"⌈"</span>);
        <span class="kw">else if</span> (i==ROWS-<span class="num">1</span>) printf(<span class="str">"⌊"</span>);
        <span class="kw">else</span>               printf(<span class="str">"|"</span>);
        <span class="kw">for</span> (<span class="kw">int</span> j=<span class="num">0</span>; j&lt;COLS; j++)
            printf(<span class="str">"%5.1f"</span>, a[i][j]);
        <span class="kw">if</span> (i==<span class="num">0</span>)         printf(<span class="str">" ⌉\\n"</span>);
        <span class="kw">else if</span> (i==ROWS-<span class="num">1</span>) printf(<span class="str">" ⌋\\n"</span>);
        <span class="kw">else</span>               printf(<span class="str">" |\\n"</span>);
    }
}`;
    </script>
  </body>
</html>
