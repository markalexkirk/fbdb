import re

data = []

with open('filename', 'r') as input:
    line = input.readline()
    while line:
        if



def _parse_line(line):
    """
    Do regex search against all defined regexes and
    return the key and match result of the first matching regex

    """

    for key, rx in rx_dict.items():
        match = rx.search(line)
        if match:
            return key, match

    return None, None
