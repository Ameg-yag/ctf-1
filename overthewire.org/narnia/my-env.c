#include <stdio.h>
#include <string.h>
#include <stdlib.h>

int main(int argc, char* argv[])
{
    char *p;

    if (argc != 3) {
        printf("Usage: <environment variable> <executable script>\n");
        return 1;
    }

    p = getenv(argv[1]);
    p += (strlen(argv[0]) - strlen(argv[2])) * 2;

    printf("environment: %s (%p)\n", argv[1], p);

    return 0;
}
