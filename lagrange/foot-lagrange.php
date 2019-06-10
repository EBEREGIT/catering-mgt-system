<script src="lagrange/dist/js/jquery-3.3.1.min.js"></script>
<script src="lagrange/dist/js/jquery-ui.min.js"></script>
<script src="lagrange/dist/js/katex.min.js"></script>
<script src="lagrange/dist/js/math.min.js"></script>
<script src="lagrange/dist/js/Chart.min.js"></script>
<script src="lagrange/lagrange.js"></script>
<script src="lagrange/dist/js/index.js"></script>

<script>
katex.render("L_i = \\frac{\\displaystyle \\prod_{{j=0 , j\\neq1}}^{n} (x - x_j)}{\\displaystyle \\prod_{j=0 , j\\neq1}^{n} (x_i - x_j)}" , equation, {
    throwOnError: false
});
katex.render("P_n(x) = \\displaystyle \\sum_{i = 0}^{n} L_i \\cdot f(x_i)" , equation2, {
    throwOnError: false
});


</script>

