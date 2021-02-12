<main>
    <div class="sansserif">
        <ul id=tree_view>
            <li>
                <a href="">
                    <button type="submit" name="" class="tree_list">Function 1</button>
                </a><br>
            </li>

            <li>
                <a href="">
                    <button type="submit" name="" class="tree_list">Function 2</button>
                </a><br>
            </li>

            <li><button class="tree_list">Func</button>
                <ul class="tree_nest">
                    <button>
                        <a href=""><li>Function 3</li></a>
                    </button>
                    <button>
                        <a href=""><li>Function 4</li></a>
                    </button>
                </ul>
            </li>
        </ul>
    </div>

    <script>
            var toggler = document.getElementsByClassName("tree_list");
            var i;

            for (i = 0; i < toggler.length; i++) {
            toggler[i].addEventListener("click", function() {
                this.parentElement.querySelector(".tree_nest").classList.toggle("active");
                this.classList.toggle("tree_list-down");
                });
            }
    </script>
</main>