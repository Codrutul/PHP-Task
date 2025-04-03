<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Tasks</title>
</head>
<body style="display:flex; flex-direction: column; align-items: center; justify-content: center;">

<h1>First Task: Select preferred sorting algorithm</h1>

<form action="SortingAlgorithms.php" method="POST"  style="display:flex; flex-direction: column;">
    <label> Enter numbers to be sorted:
        <input type="text" name="numbers"/>
    </label>
    <label> Choose the algorithm to sort the array:
        <select name="sortingAlgorithms" >
            <option value="quick">QuickSort</option>
            <option value="merge">MergeSort</option>
            <option value="bubble">BubbleSort</option>
            <option value="comb">CombSort</option>
            <option value="bogo">BogoSort</option>
        </select>
    </label>
    <button type="submit">Sort</button>
</form>
<br>

<h1>Second task: Check if the number is prime</h1>
<form action="CheckPrime.php" method="POST"  style="display:flex; flex-direction: column;">
    <label> Enter numbers to be checked:
        <input type="number" name="numberToCheck"/>
    </label>

    <button type="submit">Check</button>
</form>

<h1>Third Task: Remove special characters from text</h1>
<form action="RemoveCharsFromString.php" method="POST"  style="display:flex; flex-direction: column;">
    <label> Enter string:
        <input type="text" name="string"/>
    </label>

    <label> Enter special characters:
        <input type="text" name="specialCharacters"/>
    </label>

    <button type="submit">Remove chars</button>
</form>

<h1>Fourth Task: Generate the first n elements of the Fibonacci Sequence</h1>
<form action="FibonacciSequenceGenerator.php" method="POST"  style="display:flex; flex-direction: column;">
    <label> Enter number:
        <input type="number" name="number"/>
    </label>

    <button type="submit">Generate Fibonacci Sequence</button>
</form>

</body>
</html>