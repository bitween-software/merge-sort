# Merge sort

This is a simple example a divide-and-conquer algorithm. It uses the Merge sort algorithm as an example.
Using this algorithm in PHP is fairly simple:

```php
    $mergeSort = new Bitween\MergeSort();
    $sortedArray = $mergeSort->sort([ 3, 2, 1]);

    echo $sortedArray === [ 1, 2, 3 ]; // true
```