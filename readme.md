# Note
I removed the description files because they are copyrighted, use the link comment at the top of the solution file to check the description of the problem (if the link comment exists) on codility.com

# Stuff to memorize:

*
* Leader - 8.3. Solution with O(n)time complexity
* Maximum Slice - 9.2 & 9.3

# Optimization tips:

* __Read the material__
* Avoid intricate for statements
* Avoid creating array variables
* Reduce the number of variables
* Reduce the number of if statements
* Reduce the number of for statements

# Testing tips:

* Test for at least 7 different additional cases:
* Empty array
* One element array
* Two elements array
* Three elements array with something wrong on the first element
* Three elements array with something wrong on the last element
* Three elements array, all having the same value
* Three elements array, all having extreme values


# Messy list of Quora answers for best algorithms to know (to be analyzed and processed) 

Sieve of Eratosthenes, or another prime number sieve
Depth-first search
Breadth-first search
Dijkstra's algorithm
Floyd--Warshall algorithm
Either Kruskal's or Prim's algorithm
Some implementation of topological sorting, such as by using DFS
Convex hull (I recommend the Monotone Chains algorithm)
Coordinate compression
Edmonds--Karp, or another implementation of the Ford--Fulkerson method; or a preflow-push algorithm; or, if you are preparing an ACM codebook, Dinic's algorithm. (Note: Max flow is not allowed to appear on the IOI, but may nevertheless appear on national team-selection contests)

==============================================================

1. Evaluating mathematical expressions, this can be warm up and will let you know that problems are not easy to solve nor very tough to solve.
Example input will be a mathematical expression like: (A+B*C-D*(A-C)+A) and A=2, B=3, C=7,D=8, output will be the value of the expression at the given input point.
 2. DFS and BFS, I believe graph is the most general model in computer science and problem solving, you need to have a good traversal algorithm.
3. Longest common subsequence. To understand dynamic programming, this will also make you learn divide and conquer. As Dynamic programming = Divide and conquer + Memoization.
4. A*, finding optimised path in large graphs, finding best path, optimised solution you'll get and learn AI, you'll also learn one of the most important algorithm - Dijkstra's algorithm, finding shortest path, as A* is extension of it.
5. Quicksort using median of medians as pivot, you'll learn one of the best sorting technique, and using median of medians you'll learn magic of approximation. Have a look at merge sort also. Have a look at insertion sort, you'll learn online algorithm and amortized analysis.
6. index based sorting, this will help you understand that sometimes you can go beyond the lower bound by using everything stored in memory.
7. Any convex hull finding algorithm, that will introduce you to computational geometry, which has rich number of advance data structures.
8. Prim's algorithm, just for spending more times in graph and learning greedy approach.
9. Reading KMP algorithm, you'll learn out of box thinking, and string operations.
10. Making Finite automata, PDA, turing machine, this will give you another level of thinking when solving problems.

==============================================================

1. Number theory algorithms: GCD, inverse of the number using extended euler's algorithm, fast power, prime number
2. Graph algorithms: BFS, DFS, Shortest path algorithms, all pairs shortest path
3. String pattern matching: KMP (Sometimes, it is efficient for large input size), tries
4. Segment trees: Many problems in Code chef are related to segment trees.
5. Data Structures: Array, linked list, Priority Queue using heap, unordered sets, stacks and queues, hash and binary search tree  (Sometimes algorithms are based on them like palindrome check)
6. Search: Binary search, search using hash map, trie (also on rotated array)
7. Dynamic programming: Basics of dynamic programming, Matrix chain multiplication, LCS, Edit Distance, 0-1 Knapsack, Bellman ford,
8. Greedy: Job scheduling, Prims, Kruskal
9. Sorting: Heap sort, quick sort, merge sort (efficient for linked list too), counting sort and radix sort


================================================================


If you want specific algorithms, my top 10 would be:

    Dijkstra's - depending on the type of contest, you might see basic pathfinding problems, or you might see problems with non-obvious reductions to pathfinding problems. Whenever you have a cost minimization problem with a (reasonably small) finite number of states, an initial state and a target state, you can look at it as a pathfinding problem.
    Bellman-Ford is useful for pathfinding when edges may have negative costs. For example if you're navigating a maze with potions which boost health and hazards which lower it, Bellman-Ford would be a great approach.
    Floyd-Warshall is useful for computing all paths. It is sometimes used in problems where you don't need all paths, because it's so easy to implement. It is slower than other pathfinding algorithms though, so whether Floyd-Warshall is an option depends on the graph size.
    Edmonds-Karp for max flow/min cut problems. One common application is bipartite matching problems. For example, given N people, M food items, and a list of each person's food allergies, how many people can you feed?
    The Hungarian algorithm for assignment problems. Similar to the above, but in these problems the edges have weights, and we're maximizing the total weight rather than just the number of matchings.
    The sweep line "algorithm" (more of a general approach really) is useful for various geometric problems, like the nearest pair problem. Also useful for a variety of intersection-related problems, like finding intersecting line segments, or conflicting calendar events.
    Graham scan or another convex hull algorithm, for problems such as building a minimal fence to enclose animals.
    An algorithm for finding strongly connected components, such as Tarjan's.
    Prim's algorithm for minimum spanning trees.
    Knuth-Morris-Pratt algorithm for string searching.

Other concepts worth studying, which aren't in the above list because they aren't specific algorithms:

    Memoization/dynamic programming is quite useful. Some problems have obvious DP solutions, while others have very non-obvious ones which take practice to recognize.
    Binary search is useful in many optimization problems, so make sure you're very comfortable implementing it.
    Combinatorial game theory comes up now and then. I recommend Thomas Ferguson's introduction.
    Tries are useful in a variety of text-related problems.


===============================================================


1. Dynamic Programming : For one obvious reason - "Being Greedy doesn't necessarily work!"

2. Sorting algorithm : Unless the efficiency matters, anyone will do!

3. Search algorithm : I prefer binary search, but for most cases anything will do as long as it does it's job.

4. Dijkstra's algorithm : Well, being greedy sometimes work!

5. A* algorithms : A special case of best-first search. Very helpful in AI problems.

6. Backtracking : "Never forget where you came from".

7. Hash search or Hashing : Sometimes you do get bored of using binary search.

8. RSA/DSA : Some security.. finally!

9. Bellman-Ford : Just in case if the weights are negative!

10. Minimum Spanning Tree : It's the last one and actually you can live without this one!



===============================================================


Algorithms that are used frequently:

    Data Structure(Basic): Array, Stack, Queue, Priority queue(Heap), Map
    Sorting and Searching: Binary search, Quick Sort, Merge Sort, Counting Sort
    Number theory: Modular Exponentiation, Sieve of Eratosthenes, Fermat’s theorem, Miller Rabin
    Hashing: Hash functions and String Hashing
    Graph Algorithms: Breadth first search(BFS), Depth first search(DFS), Dijkstra's Algorithm, Minimum spanning tree(MST), Tarjan's Algorithm
    Dynamic programming: Standard dynamic programming problems such as Knapsack, Rod Cutting, Matrix chain multiplication(MCM), Longest Increasing Subsequence(LIS), Coin Change
    Data Structures(Advanced): Segment tree, Binary indexed tree(BIT), Trie tree, Suffix tree
    Strings: Knuth Morris Pratt(KMP), Suffix array

===============================================================

1. Dynamic programming. It can solve lots of practical scenarios. When we use it in reinforcement learning, it can save the value of each state in each step.

2.Greedy. Most of the time it will give you the optimal answer, but be careful with some problems like coin changes.

3.Dijkstra. I didn't implement it that much, but I used to implement it in building optimal query trees.

4.Trees. Again, they are most popularly used algorithms. Just a simple example, when you want to develop an input method app for your own language, you might want to build an alphabetic tree at first.

5.Sort.

6.Pagerank

7.Hash

8. Data Structure

9. Gradient Descent

10.NP

===============================================================

List and Arrays
Strings manipulation
Stack and Queue (Priority Queue)
Trees and Graph
Heap
Hash Table
Greedy Algorithm
Dynamic Programming
Pattern Searching
Back tracking
Recursion
Divide and Conquer
Bit Algorithm

===============================================================


1. The Fast Fourier Transform (FFT) algorithm
2. Newton's method, often coupled with Horner's method
3. Simplex algorithm
4. Iterative reweighted least squared error algorithm
5. Remez exchange algorithm for Chebyshev approximation
6. Arithmetic-geometric mean algorithm for calculating elliptic integrals
7. Interior point algorithms for solving linear programs


===============================================================


Here is my list of top five:

    Time complexity -- without knowing it, how can you see the benefit of using a better algorithm,
    see e.g. https://codility.com/programmers...
    Or maybe is it so obvious and should be 0-th item?
    The "divide and conquer" principle -- basis of many algorithm and a very convenient algorithmic problem solving principle. Some handbook applications of this principle, like the binary search (see e.g. https://codility.com/programmers...), can be included here.
    The trinity of: backtracking, dynamic and greedy programming -- they will help you solve most problems up to the medium-high level.
    (See e.g. https://codility.com/programmers... and
    https://codility.com/programmers....)
    Amortised cost analysis -- if you want to advance further, you will need it in various tricky ad-hoc algorithms, some clever standard algorithms or to improve your dynamic programming even further.
    A toolbox of graph algorithms, including searching and flows.


===============================================================


The most used data structures and algorithms are :

    Binary Search
    Quicksort
    Merge Sort
    Suffix Array
    Knuth-Morris-Pratt Algorithm (KMP)
    Rabin-Karp Algorithm
    Tries
    Depth First Traversal of a graph
    Breadth First Traversal of a graph
    Dijkstra's Algorithm
    Binary Indexed Tree
    Segment Tree (with lazy propagation)
    Persistent Segment Tree
    Z algorithm
    Floyd Warshall Algorithm
    Sparse Table(RMQ)
    Heap / Priority Queue / Heapsort
    Modular Multiplicative Inverse
    nCr % M
    Suffix Automaton
    Lowest Common Ancestor
    Counting Inversions
    Euclid's Extended Algorithm
    Suffix Tree
    Dynamic Programming
    Basic Data Structures
    Logarithmic Exponentiation
    Graphs
    Minimum Spanning Tree
    Efficient Prime Factorization
    Combinatorics
    Union Find/Disjoint Set
    Knapsack problem
    Aho-Corasick String Matching Algorithm
    Strongly Connected Components
    Bellman Ford algorithm
    Heavy-light Decomposition
    Convex Hull
    Jarvis Algorithm Implementation
    Line Intersection
    Sieve of Erastothenes
    Interval Tree
    Counting Sort
    Probabilities
    Matrix Exponentiation
    Network flow
    Max Flow(Ford-Fulkerson)
    K-d tree :
    Deque
    Binary Search Tree
    Quick Select
    Treap/Cartesian Tree
    Game Theory
    STL
    Maximum Bipartite Matching
    Manacher's Algorithm
    Miller-Rabin Primality Test
    Stable Marriage Problem
    Hungarian Algorithm
    Sweep line Algorithm
    LCP
    Gaussian Elimination
    Pollard Rho Integer Factorization
    Topological Sorting
    Detecting Cycles in a Graph : Directed , Undirected
    Geometry
    Backtracking
    Eulerian and Hamiltonian Paths
    Graph Coloring
    Meet in the Middle
    Arbitrary Precision Integer(BigInt)
    Radix Sort
    Bucket Sort
    Johnson's Algorithm
    Maximal Matching in a General Graph
    Recursion
    Inclusion and Exclusion Principle
    Coordinate Compression
    Sqrt-Decomposition
    Link-Cut Tree
    Euler's Totient Function
    Burnside Lemma
    Edit/Levenshtein Distance
    Branch and Bound
    Math for Competitive Programming
    Mo's Algorithm


===============================================================


All array operations
Inserting/deleting a node in linked lists
Hashing algorithms
Backtracking
All tree operations
Dynamic programming
All graph operations
Finding largest/smallest in an array/linked lists/tree .
Reversing a linked lists/array
Check if prime, finding all primes in a range.


===============================================================


In addition to what others have written:

1. As I recall, a lot of computer time is spent on SORTING algorithms.

2. Don't forget LINEAR PROGRAMMING.

3. In my work, DYNAMIC PROGRAMMING has been the most useful. I (with colleagues) used it for almost a dozen research papers in various application areas.

4. Often GREEDY algorithms are used to find suboptimal solutions fast.


===============================================================

1 - Dynamic Programming : Most of the topcoder SRM's consists of atleast one DP problem. It is hard to think and easy to implement.

2 - Suffix arrays : You can read about suffix arrays here Suffix Array | Set 1 (Introduction) - GeeksforGeeks

3 - Depth first search : It is used to perform a search on a tree or  a graph.

4 -  Learn to Use Stack , Queue and Vector

5 - Dijkstra's algorithm : It is used to  find the costs of shortest paths from a single vertex to a single destination vertex by stopping the algorithm once the shortest path to the destination vertex has been determined. It should be used only for +ve edge weights.

6 - Floyd--Warshall  : It is used for finding shortest paths in a weighted graph with positive or negative edge weights.

7 - MinMax Algorithm : Minimax

8 - Segment trees : Algorithm Tutorials

9 - Binary Search : It is a must to know this algorithm . Its used to search for an element in a sorted array / tree in log(n) time.

10 - Divide and Conquer : Divide and conquer algorithms

Make sure you know Sorting in n*log(n) .Be good at Math ;)

===============================================================

Dynamic Programming
List,array,stacks
Djikstra algorithm
Hashing
Divide and conquer
Knapshack
Minimum Spanning Tree
Heuristic Search
Greedy
Huffman Coding

===============================================================


1) Graph algorithms : Breadth first search(BFS), Depth first search(DFS), Strongly connected components(SCC), Dijkstra, Floyd-Warshall, Minimum spanning tree(MST), Topological sort.

2) Dynamic programming: Standard dynamic programming problems such as Rod Cutting, Knapsack, Matrix chain multiplication etc.

3) Number theory: Modular arithmetic, Fermat’s theorem, Chinese remainder theorem(CRT), Euclidian method for GCD, Logarithmic Exponentiation, Sieve of Eratosthenes, Euler’s totient function.

3) Greedy:  Standard problems such as Activity selection.

4) Search techniques: Binary search, Ternary search and Meet in the middle.

5) Data structures (Basic): Stacks, Queues, Trees and Heaps.

6) Data structures (Advanced): Trie, Segment trees, Fenwick tree or Binary indexed tree(BIT), Disjoint data structures.

7) Strings: Knuth Morris Pratt(KMP), Z algorithm, Suffix arrays/Suffix trees. These are bit advanced algorithms.

8) Computational geometry: Graham-Scan for convex hull, Line sweep.

9) Game theory: Basic principles of Nim game, Grundy numbers, Sprague-Grundy theorem.



===============================================================


https://hackernoon.com/50-data-structure-and-algorithms-interview-questions-for-programmers-b4b1ac61f5b0

https://www.java67.com/2015/09/top-10-algorithm-books-every-programmer-read-learn.html

https://dev.to/javinpaul/20-basic-algorithms-problems-from-coding-interviews-4o76

https://www.java67.com/2018/06/data-structure-and-algorithm-interview-questions-programmers.html

https://www.java67.com/2018/05/top-20-system-design-interview-questions-answers-programming.html

https://www.java67.com/2012/09/top-10-java-design-pattern-interview-question-answer.html

https://www.java67.com/2018/01/10-must-read-books-for-coders-of-all-level.html

https://www.java67.com/2015/03/10-books-every-programmer-and-software-engineer-read.html

https://www.java67.com
