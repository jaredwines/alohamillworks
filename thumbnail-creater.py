#!/usr/bin/env python

import glob
import os
import sys


def thumbnail(pathToFiles, size):
    files = glob.glob(pathToFiles + '/**/*, recursive=True)
    command = "find " + pathToFiles + " -type f -name '*.thumb.*' -delete"
    os.system(command)

    files = glob.glob(pathToFiles + '/**/*', recursive=True)

    for file in files:
        command = "convert " + file + " -resize " + size + "x" + size + "^ " + file + ".thumb.jpg"
        os.system(command)


# Press the green button in the gutter to run the script.
if __name__ == '__main__':
    path = sys.argv[1]
    size = sys.argv[2]
    thumbnail(path, size)

# See PyCharm help at https://www.jetbrains.com/help/pycharm/
